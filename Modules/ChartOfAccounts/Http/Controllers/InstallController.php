<?php

namespace Modules\ChartOfAccounts\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use App\System;
use Composer\Semver\Comparator;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;

class InstallController extends Controller
{

    public function __construct()
    {
        $this->module_name = 'chartofaccounts';
        $this->appVersion =config('chartofaccounts.module_version'); // get data from config\config.php parameters module_version
    }
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        if (!auth()->user()->can('superadmin')) {
            abort(403, 'Unauthorized action.');
        }
        ini_set('max_execution_time', 0);
        ini_set('memory_limit', '512M');

        $this->installSettings();

        /*
         *   Check if installed or not.
         *  system Model get data fro table :  $row = System::where('key', $key)->first();
         */
        $is_installed = System::getProperty($this->module_name . '_version');

        if (!empty($is_installed)) {
            abort(404);
        }

        $action_url = action('\Modules\ChartOfAccounts\Http\Controllers\InstallController@install');

        return view(viewSource().'install.install-module')
            ->with(compact('action_url'));
    }

    private function installSettings()
    {
        config(['app.debug' => true]);
        Artisan::call('config:clear');
        Artisan::call('cache:clear');
    }

    /**
     * Installing superhero Module
     */
    public function install()
    {
        // try {
        DB::beginTransaction();
        request()->validate([
            'license_code' => 'required',
            'login_username' => 'required'
        ],
            [
                'license_code.required' => 'License code is required',
                'login_username.required' => 'Username is required'
            ]
        );

        $license_code = request()->license_code;
        $email = request()->email;
        $login_username = request()->login_username;
        $pid = config('chartofaccounts.pid');
        $is_installed = System::getProperty($this->module_name . '_version');
        if (!empty($is_installed)) {
            abort(404);
        }

        DB::statement('SET default_storage_engine=INNODB;');

        Artisan::call('module:migrate-reset', ['module' => "chartofaccounts"]); // delete tabels that in migration used by module
        Artisan::call('module:migrate', ['module' => "chartofaccounts"]);       // add tables that in migartion
        System::addProperty($this->module_name . '_version', $this->appVersion);

        DB::commit();

        $output = ['success' => 1,
            'msg' => 'Chart of Accounts module installed succesfully'
        ];
        /*} catch (\Exception $e) {
            DB::rollBack();
            \Log::emergency("File:" . $e->getFile(). "Line:" . $e->getLine(). "Message:" . $e->getMessage());

            $output = [
                'success' => false,
                'msg' => $e->getMessage()
            ];
        }*/

        return redirect()
            ->action('\App\Http\Controllers\Install\ModulesController@index')
            ->with('status', $output);
    }

    /**
     * Uninstall
     * @return Response
     */
    public function uninstall()
    {
        if (!auth()->user()->can('chartofaccounts')) {
            abort(403, 'Unauthorized action.');
        }

        try {
            System::removeProperty($this->module_name . '_version');

            $output = ['success' => true,
                'msg' => __("lang_v1.success")
            ];
        } catch (\Exception $e) {
            $output = ['success' => false,
                'msg' => $e->getMessage()
            ];
        }

        return redirect()->back()->with(['status' => $output]);
    }

    /**
     * update module
     * @return Response
     */
    public function update()
    {
        //Check if superhero_version is same as appVersion then 404
        //If appVersion > superhero_version - run update script.
        //Else there is some problem.
        if (!auth()->user()->can('chartofaccounts')) {
            abort(403, 'Unauthorized action.');
        }

        try {
            DB::beginTransaction();
            ini_set('max_execution_time', 0);
            ini_set('memory_limit', '512M');

            $superhero_version = System::getProperty($this->module_name . '_version');

            if (Comparator::greaterThan($this->appVersion, $superhero_version)) {
                ini_set('max_execution_time', 0);
                ini_set('memory_limit', '512M');
                $this->installSettings();

                DB::statement('SET default_storage_engine=INNODB;');
                Artisan::call('module:migrate', ['module' => "superhero"]);
                System::setProperty($this->module_name . '_version', $this->appVersion);
            } else {
                abort(404);
            }

            DB::commit();

            $output = ['success' => 1,
                'msg' => 'Chart of Accounts module updated Succesfully to version ' . $this->appVersion . ' !!'
            ];

            return redirect()->back()->with(['status' => $output]);
        } catch (Exception $e) {
            DB::rollBack();
            die($e->getMessage());
        }
    }
}
