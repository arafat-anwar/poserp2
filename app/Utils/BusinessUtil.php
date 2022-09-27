<?php

namespace App\Utils;

use App\Account;
use App\Barcode;

use App\Business;
use App\BusinessLocation;
use App\Contact;
use App\Currency;
use App\InvoiceLayout;
use App\InvoiceScheme;
use App\NotificationTemplate;
use App\Printer;
use App\TaxRate;
use App\Unit;
use App\User;
use App\VariationTemplate;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class BusinessUtil extends Util
{

    /**
     * Adds a default settings/resources for a new business
     *
     * @param int $business_id
     * @param int $user_id
     *
     * @return boolean
     */
    public function newBusinessDefaultResources($business_id, $user_id)
    {
        $user = User::find($user_id);

        //create Admin role and assign to user
        $role = Role::create([ 'name' => 'Admin#' . $business_id,
            'business_id' => $business_id,
            'guard_name' => 'web', 'is_default' => 1
        ]);
        $user->assignRole($role->name);

        //Create Cashier role for a new business
        $cashier_role = Role::create([ 'name' => 'Cashier#' . $business_id,
            'business_id' => $business_id,
            'guard_name' => 'web'
        ]);
        $permissions=['sell.view', 'sell.create', 'sell.update', 'sell.delete', 'access_all_locations', 'view_cash_register', 'close_cash_register'];
        $this->createpermissions($permissions);
        $cashier_role->syncPermissions($permissions);

        $business = Business::findOrFail($business_id);

        //Update reference count
        $ref_count = $this->setAndGetReferenceCount('contacts', $business_id);
        $contact_id = $this->generateReferenceNumber('contacts', $ref_count, $business_id);

        //Add Default/Walk-In Customer for new business
        $customer = [
            'business_id' => $business_id,
            'type' => 'customer',
            'name' => 'عميل قطاعي',
            'created_by' => $user_id,
            'is_default' => 1,
            'contact_id' => $contact_id,
            'credit_limit' => 0
        ];
        Contact::create($customer);

        //create default invoice setting for new business
        InvoiceScheme::create(['name' => 'Default',
            'scheme_type' => 'blank',
            'prefix' => '',
            'start_number' => 1,
            'total_digits' => 4,
            'is_default' => 1,
            'business_id' => $business_id
        ]);
        //create default invoice layour for new business
        InvoiceLayout::create([
            'name' => 'فاتورة مبيعات ضريبة',
            'header_text' => null,
            'invoice_no_prefix' => 'فاتورة رقم:',
            'invoice_heading' => 'فاتورة مبيعات ضريبية',
            'sub_total_label' => 'الإجمالي غير شامل الضريبة',
            'discount_label' => 'الخصم',
            'quotation_no_prefix' => 'رقم عرض السعر',
            'tax_label' => null,
            'design' => 'e-invoice',
            'contact_custom_fields' => array("custom_field1","custom_field2"),
            'location_custom_fields' => array("custom_field1","custom_field2"),
            'qr_code_fields' => '["business_name","address","tax_1","tax_2","invoice_no","invoice_datetime","subtotal","total_amount","total_tax","customer_name","invoice_url"]',
            'round_off_label' => 'التقريب',
            'client_tax_label' => 'الرقم الضريبي',
            'total_label' => 'الإجمالي شامل الضريبة',
            'client_id_label' => 'كود العميل',
            'sales_person_label' => 'الموظف:',
            'show_landmark' => 0,
            'show_city' => 1,
            'show_logo' => 1,
            'show_state' => 1,
            'show_zip_code' => 1,
            'show_country' => 1,
            'highlight_color' => '#000000',
            'prev_bal_label' => 'إجمالي مستحق',
            'is_default' => 1,
            'business_id' => $business_id,
            'invoice_heading_not_paid' => '-غير مدفوعة',
            'invoice_heading_paid' => '- مدفوعة',
            'total_due_label' => 'الباقي',
            'paid_label' => 'المدفوع',
            'show_payments' => 1,
            'show_qr_code' => 1,
            'show_tax_1' => 0,
            'show_cat_code' => 0,
            'show_customer' => 1,
            'show_business_name' => 1,
            'show_location_name' => 0,
            'customer_label' => 'Customer',
            'table_product_label' => 'المنتج',
            'table_qty_label' => 'الكمية',
            'table_unit_price_label' => 'سعر الوحدة',
            'table_subtotal_label' => 'الإجمالي',
            'quotation_heading' => 'عرض أسعار',
            'date_label' => 'تاريخ الفاتورة',
            'footer_text' => 'شكرا لكم ونتمي عودتكم في وقت قريب'
        ]);
        //invoice 2
        InvoiceLayout::create([
            'name' => 'فاتورة مبيعات ضريبية مبسطة',
            'header_text' => null,
            'invoice_no_prefix' => 'فاتورة رقم:',
            'invoice_heading' => 'فاتورة مبيعات ضريبية',
            'sub_total_label' => 'الإجمالي غير شامل الضريبة',
            'discount_label' => 'الخصم',
            'quotation_no_prefix' => 'رقم عرض السعر',
            'tax_label' => null,
            'design' => 'e-invoice2',
            'contact_custom_fields' => array("custom_field1","custom_field2"),
            'location_custom_fields' => array("custom_field1","custom_field2"),
            'qr_code_fields' => '["business_name","address","tax_1","tax_2","invoice_no","invoice_datetime","subtotal","total_amount","total_tax","customer_name","invoice_url"]',
            'round_off_label' => 'التقريب',
            'client_tax_label' => 'الرقم الضريبي',
            'total_label' => 'الإجمالي شامل الضريبة',
            'client_id_label' => 'كود العميل',
            'sales_person_label' => 'الموظف:',
            'show_landmark' => 0,
            'show_city' => 1,
            'show_logo' => 1,
            'show_state' => 1,
            'show_zip_code' => 1,
            'show_country' => 1,
            'highlight_color' => '#000000',
            'prev_bal_label' => 'إجمالي مستحق',
            'is_default' => 0,
            'business_id' => $business_id,
            'invoice_heading_not_paid' => '-غير مدفوعة',
            'invoice_heading_paid' => '- مدفوعة',
            'total_due_label' => 'الباقي',
            'paid_label' => 'المدفوع',
            'show_payments' => 1,
            'show_qr_code' => 1,
            'show_tax_1' => 0,
            'show_cat_code' => 0,
            'show_customer' => 1,
            'show_business_name' => 1,
            'show_location_name' => 0,
            'customer_label' => 'Customer',
            'table_product_label' => 'المنتج',
            'table_qty_label' => 'الكمية',
            'table_unit_price_label' => 'سعر الوحدة',
            'table_subtotal_label' => 'الإجمالي',
            'quotation_heading' => 'عرض أسعار',
            'date_label' => 'تاريخ الفاتورة',
            'footer_text' => 'شكرا لكم ونتمي عودتكم في وقت قريب'
        ]);

        /*Create Tax rate*/

        $taxData =
            [
                'business_id' => $business_id,
                'name' => 'ضريبة القيمة المضافة ٪15',
                'amount' => 15.0000,
            ];
        TaxRate::create($taxData);

        /*Create default bank account*/
        $bank1 =
            [
                'business_id' => $business_id,
                'name' => 'صندوق مبيعات نقدية',
                'account_number' => '0001',
                'account_type_id' => 0,
            ];
        $bank2 =
            [
                'business_id' => $business_id,
                'name' => 'حساب البنك مبيعات الشبكة',
                'account_number' => '0002',
                'account_type_id' => 0,
            ];
        Account::create($bank1);
        Account::create($bank2);
        /*Variations default data 1*/
        $variations_name1 = 'اللون';
        $values1 = array("أحمر","أسود","أبيض");
        $this->VariationsDefault($business_id, $variations_name1,$values1);
        /*Variations default data 2*/
        $variations_name2 = 'المقاس';
        $values2 = array('S','L','XL','XXL','XXXL');
        $this->VariationsDefault($business_id, $variations_name2,$values2);
        /*Variations default data 3*/
        $variations_name3 = 'الحجم';
        $values3 = array('كبير','وسط','صغير');
        $this->VariationsDefault($business_id, $variations_name3,$values3);
        /*Variations default data 4*/
        $variations_name4 = 'كمية جملة';
        $values4 = array('كرتون','علبه','درزن','ربطه');
        $this->VariationsDefault($business_id, $variations_name4,$values4);
        /*Variations default data 5*/
        $variations_name_5 = 'عيار21';
//        $values_5 = array('دبل عيار 21','نص طقم ذهب عيار 21','كف عيار 21','طقم ذهب عيار 21','سحبات عيار 21','خاتم فصوص عيار21','اساور عيار 21','عقد شوكر عيار 21','مخنق عيار 21','طقم أطفال عيار 21','تعليقة ذهب عيار 21','خلخال عيار 21','سلسال ذهب عيار 21','حلق عيار 21','خاتم عيار 21','بناجر عيار 21','تعليقه ساده 21','تعليقه فصوص عيار 21','عقد ذهب عيار 21','طقم ملكي عيار 21','جنية ذهب عيار21');
        $str5="دبل عيار 21, نص طقم ذهب عيار 21, كف عيار 21, طقم ذهب عيار 21, سحبات عيار 21, خاتم فصوص عيار21, اساور عيار 21, عقد شوكر عيار 21, مخنق عيار 21, طقم أطفال عيار 21, تعليقة ذهب عيار 21, خلخال عيار 21, سلسال ذهب عيار 21, حلق عيار 21, خاتم عيار 21, بناجر عيار 21, تعليقه ساده 21, تعليقه فصوص عيار 21, عقد ذهب عيار 21, طقم ملكي عيار 21, جنية ذهب عيار21";
        $values_5 = explode(",",$str5);
        $this->VariationsDefault($business_id, $variations_name_5,$values_5);
        /*Variations default data 6*/
        $variations_name_6 = 'عيار18';
        $str6 = "سلاسل عيار 18, طقم ذهب عيار 18, سحبات عيار 18, طقم أطفال عيار 18, بناجر عيار 18, نص طقم ذهب عيار 18, حلق عيار 18, خاتم عادي عيار 18, طقم ابيض عيار 18, خاتم فصوص عيار 18, نص طقم ابيض عيار 18, دبل عيار 18, عقد عيار 18, اساور عيار 18 اطفال, تعليقة عيار 18, اساور عيار 18, كف عيار18, طقوم 18, عقد شوكر عيار 18, خلخال عيار 18";
        $values_6 = explode(",",$str6);
        $this->VariationsDefault($business_id, $variations_name_6,$values_6);
        /*Variations default data 7*/
        $variations_name_7 = 'عيار22';
        $str7 = "سلسال ذهب عيار 22, سحبة ذهب عيار22, خاتم ذهب عيار 22, حلق ذهب عيار 22, عقد عيار 22, طقم ذهب عيار 22, بناجر ذهب عيار 22, جنية عيار22, دبل عيار 21, نص طقم ذهب عيار 21, كف عيار 21, طقم ذهب عيار 21, سحبات عيار 21, خاتم فصوص عيار21, اساور عيار 21, عقد شوكر عيار 21, مخنق عيار 21, طقم أطفال عيار 21, تعليقة ذهب عيار 21, خلخال عيار 21, سلسال ذهب عيار 21, حلق عيار 21, خاتم عيار 21, بناجر عيار 21, تعليقه ساده 21, تعليقه فصوص عيار 21, عقد ذهب عيار 21, طقم ملكي عيار 21, جنية ذهب عيار21, سلاسل عيار 18, طقم ذهب عيار 18, سحبات عيار 18, طقم أطفال عيار 18, بناجر عيار 18, نص طقم ذهب عيار 18, حلق عيار 18, خاتم عادي عيار 18, طقم ابيض عيار 18, خاتم فصوص عيار 18, نص طقم ابيض عيار 18, دبل عيار 18, عقد عيار 18, اساور عيار 18 اطفال, تعليقة عيار 18, اساور عيار 18, كف عيار18, طقوم 18, عقد شوكر عيار 18, خلخال عيار 18";
        $values_7 = explode(",",$str7);
        $this->VariationsDefault($business_id, $variations_name_7,$values_7);

        //Add Default Unit for new business
        $unit_actual_name_1 = 'بكرة';
        $unit_short_name_1 = 'بكرة';
        $unit_allow_decimal_1 = 1;
        $this->UnitDefault($business_id, $unit_actual_name_1, $unit_short_name_1, $unit_allow_decimal_1, $user_id);
        $unit_actual_name_2 = 'جرام';
        $unit_short_name_2 = 'جرام';
        $unit_allow_decimal_2 = 1;
        $this->UnitDefault($business_id, $unit_actual_name_2, $unit_short_name_2, $unit_allow_decimal_2, $user_id);
        $unit_actual_name_3 = 'حبة';
        $unit_short_name_3 = 'حبة';
        $unit_allow_decimal_3 = 1;
        $this->UnitDefault($business_id, $unit_actual_name_3, $unit_short_name_3, $unit_allow_decimal_3, $user_id);
        $unit_actual_name_4 = 'درزن';
        $unit_short_name_4 = 'درزن';
        $unit_allow_decimal_4 = 1;
        $this->UnitDefault($business_id, $unit_actual_name_4, $unit_short_name_4, $unit_allow_decimal_4, $user_id);
        $unit_actual_name_5 = 'ربطة';
        $unit_short_name_5 = 'ربطة';
        $unit_allow_decimal_5 = 1;
        $this->UnitDefault($business_id, $unit_actual_name_5, $unit_short_name_5, $unit_allow_decimal_5, $user_id);
        $unit_actual_name_6 = 'صحن';
        $unit_short_name_6 = 'صحن';
        $unit_allow_decimal_6 = 1;
        $this->UnitDefault($business_id, $unit_actual_name_6, $unit_short_name_6, $unit_allow_decimal_6, $user_id);
        $unit_actual_name_7 = 'علبة';
        $unit_short_name_7 = 'علبة';
        $unit_allow_decimal_7 = 1;
        $this->UnitDefault($business_id, $unit_actual_name_7, $unit_short_name_7, $unit_allow_decimal_7, $user_id);
        $unit_actual_name_8 = 'كاسة';
        $unit_short_name_8 = 'كاسة';
        $unit_allow_decimal_8 = 1;
        $this->UnitDefault($business_id, $unit_actual_name_8, $unit_short_name_8, $unit_allow_decimal_8, $user_id);
        $unit_actual_name_9 = 'كاسة';
        $unit_short_name_9 = 'كاسة';
        $unit_allow_decimal_9 = 1;
        $this->UnitDefault($business_id, $unit_actual_name_9, $unit_short_name_9, $unit_allow_decimal_9, $user_id);
        $unit_actual_name_10 = 'كرتون';
        $unit_short_name_10 = 'كرتون';
        $unit_allow_decimal_10 = 1;
        $this->UnitDefault($business_id, $unit_actual_name_10, $unit_short_name_10, $unit_allow_decimal_10, $user_id);
        $unit_actual_name_11 = 'كيلو';
        $unit_short_name_11 = 'كيلو';
        $unit_allow_decimal_11 = 1;
        $this->UnitDefault($business_id, $unit_actual_name_11, $unit_short_name_11, $unit_allow_decimal_11, $user_id);
        $unit_actual_name_12 = 'متر';
        $unit_short_name_12 = 'متر';
        $unit_allow_decimal_12 = 1;
        $this->UnitDefault($business_id, $unit_actual_name_12, $unit_short_name_12, $unit_allow_decimal_12, $user_id);

        //Create default notification templates
        $notification_templates = NotificationTemplate::defaultNotificationTemplates($business_id);
        foreach ($notification_templates as $notification_template) {
            NotificationTemplate::create($notification_template);
        }

        return true;
    }

    public function UnitDefault($business_id, $actual_name, $short_name, $allow_decimal, $user_id)
    {
        $unit = [
            'business_id' => $business_id,
            'actual_name' => $actual_name,
            'short_name' => $short_name,
            'allow_decimal' => $allow_decimal,
            'created_by' => $user_id
        ];
        return Unit::create($unit);
    }

    public function VariationsDefault($business_id, $variations_name, $values)
    {
        $variation_template = [
            'business_id' => $business_id,
            'name' => $variations_name
        ];
        $variation = VariationTemplate::create($variation_template);
        $data1 = [];
        foreach ($values as $value) {
            if (!empty($value)) {
                $data1[] = [ 'name' => $value];
            }
        }
        return $variation->values()->createMany($data1);
    }
    /**
     * Gives a list of all currencies
     *
     * @return array
     */
    public function allCurrencies()
    {
        $currencies = Currency::select('id', DB::raw("concat(country, ' - ',currency, '(', code, ') ') as info"))
            ->where('status','=',1)
            ->orderBy('country')
            ->pluck('info', 'id');

        return $currencies;
    }

    /**
     * Gives a list of all timezone
     *
     * @return array
     */
    public function allTimeZones()
    {
        $datetime = new \DateTimeZone("EDT");

        $timezones = $datetime->listIdentifiers();
        $timezone_list = [];
        foreach ($timezones as $timezone) {
            $timezone_list[$timezone] = $timezone;
        }

        return $timezone_list;
    }

    /**
     * Gives a list of all accouting methods
     *
     * @return array
     */
    public function allAccountingMethods()
    {
        return [
            'fifo' => __('business.fifo'),
            'lifo' => __('business.lifo')
        ];
    }

    /**
     * Creates new business with default settings.
     *
     * @return array
     */
    public function createNewBusiness($business_details)
    {
        $business_details['sell_price_tax'] = 'includes';

        $business_details['default_profit_percent'] = 25;

        //Add POS shortcuts
        $business_details['keyboard_shortcuts'] = '{"pos":{"express_checkout":"shift+e","pay_n_ckeckout":"shift+p","draft":"shift+d","cancel":"shift+c","edit_discount":"shift+i","edit_order_tax":"shift+t","add_payment_row":"shift+r","finalize_payment":"shift+f","recent_product_quantity":"f2","add_new_product":"f4"}}';

        $business_details['pos_settings'] = '{"amount_rounding_method":null,"enable_msp":"0","allow_overselling":"1","is_pos_subtotal_editable":"0","enable_transaction_date":"1","enable_weighing_scale":"1","show_invoice_layout":"1","print_on_suspend":"1","show_pricing_on_product_sugesstion":"1","disable_pay_checkout":0,"disable_draft":0,"disable_express_checkout":0,"hide_product_suggestion":0,"hide_recent_trans":0,"disable_discount":0,"disable_order_tax":0}';
        $business_details['common_settings'] = '{"enable_product_warranty":"1","default_credit_limit":"10000","default_datatable_page_entries":"25","total_quantity_label":"total_quantity_label"}';
        $business_details['custom_labels'] = '{"payments":{"custom_pay_1":"الدفع عند الإستلام","custom_pay_2":null,"custom_pay_3":null,"custom_pay_4":null,"custom_pay_5":null,"custom_pay_6":null,"custom_pay_7":null},"contact":{"custom_field_1":null,"custom_field_2":null,"custom_field_3":null,"custom_field_4":null,"custom_field_5":null,"custom_field_6":null,"custom_field_7":null,"custom_field_8":null,"custom_field_9":null,"custom_field_10":null},"product":{"custom_field_1":null,"custom_field_2":null,"custom_field_3":null,"custom_field_4":null},"location":{"custom_field_1":"رقم السجل التجاري","custom_field_2":"الرقم الضريبي","custom_field_3":null,"custom_field_4":null},"user":{"custom_field_1":null,"custom_field_2":null,"custom_field_3":null,"custom_field_4":null},"purchase":{"custom_field_1":null,"custom_field_2":null,"custom_field_3":null,"custom_field_4":null},"sell":{"custom_field_1":null,"custom_field_2":null,"custom_field_3":null,"custom_field_4":null},"shipping":{"custom_field_1":null,"custom_field_2":null,"custom_field_3":null,"custom_field_4":null,"custom_field_5":null},"types_of_service":{"custom_field_1":null,"custom_field_2":null,"custom_field_3":null,"custom_field_4":null}}';
        $business_details['time_zone'] = 'Asia/Riyadh';
        $business_details['time_format'] = 12;
        $business_details['enable_sub_units'] = 1;
        $business_details['enable_racks'] = 1;
        $business_details['enable_row'] = 1;
        $business_details['enable_position'] = 1;
        $business_details['tax_label_1'] = 'ضريبة القيمة المضافة';
        //Add prefixes
        $business_details['ref_no_prefixes'] = [
            'purchase' => 'PO',
            'stock_transfer' => 'ST',
            'stock_adjustment' => 'SA',
            'sell_return' => 'CN',
            'expense' => 'EP',
            'contacts' => 'CO',
            'purchase_payment' => 'PP',
            'sell_payment' => 'SP',
            'business_location' => 'BL'
        ];

        //Disable inline tax editing
        $business_details['enable_inline_tax'] = 0;

        $business = Business::create_business($business_details);

        return $business;
    }

    /**
     * Gives details for a business
     *
     * @return object
     */
    public function getDetails($business_id)
    {
        $details = Business::
        leftjoin('tax_rates AS TR', 'business.default_sales_tax', 'TR.id')
            ->leftjoin('currencies AS cur', 'business.currency_id', 'cur.id')
            ->select(
                'business.*',
                'cur.code as currency_code',
                'cur.symbol as currency_symbol',
                'thousand_separator',
                'decimal_separator',
                'TR.amount AS tax_calculation_amount',
                'business.default_sales_discount'
            )
            ->where('business.id', $business_id)
            ->first();

        return $details;
    }

    /**
     * Gives current financial year
     *
     * @return array
     */
    public function getCurrentFinancialYear($business_id)
    {
        $business = Business::where('id', $business_id)->first();
        $start_month = $business->fy_start_month;
        $end_month = $start_month -1;
        if ($start_month == 1) {
            $end_month = 12;
        }

        $start_year = date('Y');
        //if current month is less than start month change start year to last year
        if (date('n') < $start_month) {
            $start_year = $start_year - 1;
        }

        $end_year = date('Y');
        //if current month is greater than end month change end year to next year
        if (date('n') > $end_month) {
            $end_year = $start_year + 1;
        }
        $start_date = $start_year . '-' . str_pad($start_month, 2, 0, STR_PAD_LEFT) . '-01';
        $end_date = $end_year . '-' . str_pad($end_month, 2, 0, STR_PAD_LEFT) . '-01';
        $end_date = date('Y-m-t', strtotime($end_date));

        $output = [
            'start' => $start_date,
            'end' =>  $end_date
        ];
        return $output;
    }

    /**
     * Adds a new location to a business
     *
     * @param int $business_id
     * @param array $location_details
     * @param int $invoice_layout_id default null
     *
     * @return location object
     */
    public function addLocation($business_id, $location_details, $invoice_scheme_id = null, $invoice_layout_id = null)
    {
        if (empty($invoice_scheme_id)) {
            $layout = InvoiceLayout::where('is_default', 1)
                ->where('business_id', $business_id)
                ->first();
            $invoice_layout_id = $layout->id;
        }

        if (empty($invoice_scheme_id)) {
            $scheme = InvoiceScheme::where('is_default', 1)
                ->where('business_id', $business_id)
                ->first();
            $invoice_scheme_id = $scheme->id;
        }

        //Update reference count
        $ref_count = $this->setAndGetReferenceCount('business_location', $business_id);
        $location_id = $this->generateReferenceNumber('business_location', $ref_count, $business_id);

        //Enable all payment methods by default
        $accounts = Account::where('business_id', $business_id)->get();
        foreach ($accounts as $value){
            if ($value->account_number == '0001'){
                $bl1 = $value->id;
            }
            if ($value->account_number == '0002'){
                $bl2 = $value->id;
            }
        }

        $payment_types = $this->payment_types();
        $location_payment_types = [];
        foreach ($payment_types as $key => $value) {
//            dd($key=='cash');
            if ($key=='cash'){
                $location_payment_types[$key] = [
                    'is_enabled' => 1,
                    'account' => $bl1
                ];
            }elseif ($key=='card'){
                $location_payment_types[$key] = [
                    'is_enabled' => 1,
                    'account' => $bl2
                ];
            }elseif ($key=='cheque'){
                $location_payment_types[$key] = [
                    'is_enabled' => 1,
                    'account' => $bl2
                ];
            }elseif ($key=='bank_transfer'){
                $location_payment_types[$key] = [
                    'is_enabled' => 1,
                    'account' => $bl2
                ];
            }else{
                $location_payment_types[$key] = [
                    'is_enabled' => 1,
                    'account' => null
                ];
            }
        }
//        dd($location_payment_types);

        $location_payment_types_with_ac = '{"cash":{"is_enabled":"1","account": '.$bl1.',"card":{"is_enabled":"1","account":'.$bl2.'},"cheque":{"is_enabled":"1","account":'.$bl2.'},"bank_transfer":{"is_enabled":"1","account":'.$bl2.'},"other":{"is_enabled":"1","account":null},"custom_pay_1":{"is_enabled":"1","account":null},"custom_pay_2":{"is_enabled":"1","account":null},"custom_pay_3":{"is_enabled":"1","account":null},"custom_pay_4":{"is_enabled":"1","account":null},"custom_pay_5":{"is_enabled":"1","account":null},"custom_pay_6":{"is_enabled":"1","account":null},"custom_pay_7":{"is_enabled":"1","account":null}}';

        $location = BusinessLocation::create(['business_id' => $business_id,
            'name' => $location_details['name'],
            'landmark' => $location_details['landmark'],
            'city' => $location_details['city'],
            'state' => $location_details['state'],
            'zip_code' => $location_details['zip_code'],
            'country' => $location_details['country'],
            'invoice_scheme_id' => $invoice_scheme_id,
            'invoice_layout_id' => $invoice_layout_id,
            'sale_invoice_layout_id' => $invoice_layout_id,
            'mobile' => !empty($location_details['mobile']) ? $location_details['mobile'] : '',
            'alternate_number' => !empty($location_details['alternate_number']) ? $location_details['alternate_number'] : '',
            'website' => !empty($location_details['website']) ? $location_details['website'] : '',
            'email' => '',
            'location_id' => $location_id,
            'default_payment_accounts' => json_encode($location_payment_types)
//            'default_payment_accounts' => $location_payment_types_with_ac

        ]);
        return $location;
    }

    /**
     * Return the invoice layout details
     *
     * @param int $business_id
     * @param array $location_details
     * @param array $layout_id = null
     *
     * @return location object
     */
    public function invoiceLayout($business_id, $location_id, $layout_id = null)
    {
        $layout = null;
        if (!empty($layout_id)) {
            $layout = InvoiceLayout::find($layout_id);
        }

        //If layout is not found (deleted) then get the default layout for the business
        if (empty($layout)) {
            $layout = InvoiceLayout::where('business_id', $business_id)
                ->where('is_default', 1)
                ->first();
        }
        //$output = []
        return $layout;
    }

    /**
     * Return the printer configuration
     *
     * @param int $business_id
     * @param int $printer_id
     *
     * @return array
     */
    public function printerConfig($business_id, $printer_id)
    {
        $printer = Printer::where('business_id', $business_id)
            ->find($printer_id);

        $output = [];

        if (!empty($printer)) {
            $output['connection_type'] = $printer->connection_type;
            $output['capability_profile'] = $printer->capability_profile;
            $output['char_per_line'] = $printer->char_per_line;
            $output['ip_address'] = $printer->ip_address;
            $output['port'] = $printer->port;
            $output['path'] = $printer->path;
            $output['server_url'] = $printer->server_url;
        }

        return $output;
    }

    /**
     * Return the date range for which editing of transaction for a business is allowed.
     *
     * @param int $business_id
     * @param char $edit_transaction_period
     *
     * @return array
     */
    public function editTransactionDateRange($business_id, $edit_transaction_period)
    {
        if (is_numeric($edit_transaction_period)) {
            return ['start' => \Carbon::today()
                ->subDays($edit_transaction_period),
                'end' => \Carbon::today()
            ];
        } elseif ($edit_transaction_period == 'fy') {
            //Editing allowed for current financial year
            return $this->getCurrentFinancialYear($business_id);
        }

        return false;
    }

    /**
     * Return the default setting for the pos screen.
     *
     * @return array
     */
    public function defaultPosSettings()
    {
        return ['disable_pay_checkout' => 0, 'disable_draft' => 0, 'disable_express_checkout' => 0, 'hide_product_suggestion' => 0, 'hide_recent_trans' => 0, 'disable_discount' => 0, 'disable_order_tax' => 0];
    }

    /**
     * Return the default setting for the email.
     *
     * @return array
     */
    public function defaultEmailSettings()
    {
        return ['mail_host' => '', 'mail_port' => '', 'mail_username' => '', 'mail_password' => '', 'mail_encryption' => '', 'mail_from_address' => '', 'mail_from_name' => ''];
    }

    /**
     * Return the default setting for the email.
     *
     * @return array
     */
    public function defaultSmsSettings()
    {
        return ['url' => '', 'send_to_param_name' => 'to', 'msg_param_name' => 'text', 'request_method' => 'post', 'param_1' => '', 'param_val_1' => '', 'param_2' => '', 'param_val_2' => '','param_3' => '', 'param_val_3' => '','param_4' => '', 'param_val_4' => '','param_5' => '', 'param_val_5' => '', ];
    }

    public function createpermissions($permission){
        $insert_data = [];
        $time_stamp = \Carbon::now()->toDateTimeString();
        foreach ($permission as $d) {
            $insert_data['guard_name'] = 'web';
            $insert_data['created_at'] = $time_stamp;
            $insert_data['name'] = $d;
            Permission::firstOrCreate(
                [ 'name' => $d],
                $insert_data
            );
        }

    }
}
