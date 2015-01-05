<?php
/**
 * @category    Bubble
 * @package     Bubble_AdminTheme
 * @version     1.4.3
 * @copyright   Copyright (c) 2015 BubbleShop (https://www.bubbleshop.net)
 */
class Bubble_AdminTheme_Block_Adminhtml_Themes_Select extends Mage_Adminhtml_Block_Html_Select
{
    protected function _construct()
    {
        $this->setName('theme')
            ->setId('interface_theme')
            ->setTitle($this->helper('bubble_admintheme')->__('Current Admin Theme'))
            ->setValue(Mage::getStoreConfig('bubble_admintheme/config/theme'))
            ->setOptions($this->_getSelectOptions());
    }

    protected function _getSelectOptions()
    {
        return Mage::getModel('bubble_admintheme/adminhtml_system_config_source_themes')->toOptionArray();
    }
}