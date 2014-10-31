<?php

class Bubble_AdminTheme_Adminhtml_ThemeController extends Mage_Adminhtml_Controller_Action
{
    public function changeAction()
    {
        $theme = $this->getRequest()->getParam('theme');
        if ($theme) {
            Mage::getConfig()->saveConfig('bubble_admintheme/config/theme', $theme);
            Mage::app()->getCacheInstance()->cleanType('config');
        }
        $this->_redirectReferer();
    }
}