<?php

namespace App\Http;

use Nwidart\Menus\Presenters\Presenter;

class AdminlteCustomPresenter extends Presenter
{
    /**
     * {@inheritdoc }.
     */
    public function getOpenTagWrapper()
    {
        if(frontendVersion() == 1){
            return PHP_EOL . '<ul class="sidebar-menu tree" data-widget="tree">' . PHP_EOL;
        }else{
            return PHP_EOL . '<div class="menu menu-column menu-rounded menu-sub-indention px-3" id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false">' . PHP_EOL;
        }
    }

    /**
     * {@inheritdoc }.
     */
    public function getCloseTagWrapper()
    {
        if(frontendVersion() == 1){
            return PHP_EOL . '</ul>' . PHP_EOL;
        }else{
            return PHP_EOL . '</div>' . PHP_EOL;
        }
    }

    /**
     * {@inheritdoc }.
     */
    public function getMenuWithoutDropdownWrapper($item)
    {
        if(frontendVersion() == 1){
            return '<li' . $this->getActiveState($item) . '><a href="' . $item->getUrl() . '" ' . $item->getAttributes() . '>' . $item->getIcon() . ' <span>' . $item->title . '</span></a></li>' . PHP_EOL;
        }else{
            if ($this->getActiveState($item)){
                return
                    '<div class="menu-item">'.
                        '<a class="menu-link ' .$this->getActiveState($item).'" href="' . $item->getUrl() . '" ' . $item->getAttributes() . '>'.
                            '<span class="menu-icon">'.
                                '<span class="svg-icon svg-icon-2">'. $item->getIcon(). '</span>'.
                            '</span>'.
                            '<span class="menu-title">'. $item->title .'</span>'.
                        '</a>'.
                    '</div>'
                    .PHP_EOL;
            }else{
                return
                    '<div class="menu-item">'.
                        '<a style="background-color: #1e1e2d" class="menu-link" href="' . $item->getUrl() . '" ' . $item->getAttributes() . '>'.
                            '<span class="menu-icon">'.
                                '<span class="svg-icon svg-icon-2">'. $item->getIcon(). '</span>'.
                            '</span>'.
                            '<span class="menu-title">'. $item->title .'</span>'.
                        '</a>'.
                    '</div>'
                    .PHP_EOL;
            }
        }
    }

    /**
     * {@inheritdoc }.
     */
    public function getActiveState($item, $state = 'active')
    {
        return $item->isActive() ? $state : null;
    }

    /**
     * Get active state on child items.
     *
     * @param $item
     * @param string $state
     *
     * @return null|string
     */
    public function getActiveStateOnChild($item, $state = 'active')
    {
        return $item->hasActiveOnChild() ? $state : null;
    }

    /**
     * {@inheritdoc }.
     */
    public function getDividerWrapper()
    {
        if(frontendVersion() == 1){

        }else{
            return '<div class="separator my-2"></div>';
        }
    }

    /**
     * {@inheritdoc }.
     */
    public function getHeaderWrapper($item)
    {
        return '<li class="header">' . $item->title . '</li>';
    }

    /**
     * {@inheritdoc }.
     */
    public function getMenuWithDropDownWrapper($item)
    {
        if(frontendVersion() == 1){
            return '<li class="treeview' . $this->getActiveStateOnChild($item, ' active') . '" ' . $item->getAttributes() . '>
                      <a href="#">
                        ' . $item->getIcon() . ' <span>' . $item->title . '</span>
                       <span class="pull-right-container">
                         <i class="fa fa-angle-left pull-right"></i>
                       </span>
                      </a>
                      <ul class="treeview-menu">
                        ' . $this->getChildMenuItems($item) . '
                      </ul>
                    </li>'
           . PHP_EOL;
        }else{
            return
            '<div data-kt-menu-trigger="click" class="menu-item menu-accordion">'.
                '<span class="menu-link'.$this->getActiveStateOnChild($item, ' active').'">'.
                    '<span class="menu-icon">'.
                        '<span class="svg-icon svg-icon-2">'.
                            $item->getIcon().
                        '</span>'.
                    '</span>'.
                    '<span class="menu-title">' .$item->title. '</span>'.
                    '<span class="menu-arrow"></span>'.
                '</span>'.
                '<div class="menu-sub menu-sub-accordion">'.
                    '<div class="menu-item'.$this->getActiveStateOnChild($item, ' active').'">'.
                        '<span class="menu-title">'. $this->getChildMenuItems($item)  .'</span>'.
                    '</div>'.
                '</div>'.
            '</div>'
            . PHP_EOL;
        }
    }

    /**
     * Get multilevel menu wrapper.
     *
     * @param \Nwidart\Menus\MenuItem $item
     *
     * @return string`
     */
    public function getMultiLevelDropdownWrapper($item)
    {
        if(frontendVersion() == 1){
            return
               '<div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown p-0">'.
                   '<div class="menu-active-bg px-4 px-lg-0">'.
                       '<div class="menu-active-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown p-0">'.
                           '<div class="menu-item">'.
                               '<a class="menu-link '.$this->getActiveStateOnChild($item, ' active').'" href="#">'.
                                   '<span class="menu-bullet">'.
                                       '<span class="bullet bullet-dot"></span>'.
                                   '</span>'.
                                   '<span class="menu-title">'. $this->getChildMenuItems($item)  .'</span>'.
                           '</div>'.
                       '</div>'.
                   '</div>'.
               '</div>'
               . PHP_EOL;
           }else{
                return '<li class="treeview' . $this->getActiveStateOnChild($item, ' active') . '">
                      <a href="#">
                        ' . $item->getIcon() . ' <span>' . $item->title . '</span>
                        <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                        </span>
                      </a>
                      <ul class="treeview-menu">
                        ' . $this->getChildMenuItems($item) . '
                      </ul>
                    </li>'
            . PHP_EOL;
           }
    }
}
