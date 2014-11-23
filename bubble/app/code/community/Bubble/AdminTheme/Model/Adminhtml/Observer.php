<?php
/**
 * @category    Bubble
 * @package     Bubble_AdminTheme
 * @version     1.3.1
 * @copyright   Copyright (c) 2014 BubbleShop (https://www.bubbleshop.net)
 */
class Bubble_AdminTheme_Model_Adminhtml_Observer
{
    public function setTheme()
    {
        $theme = Mage::getStoreConfig('bubble_admintheme/config/theme');
        Mage::getDesign()->setTheme($theme);
        foreach (array('layout', 'template', 'skin', 'locale') as $type) {
            Mage::getDesign()->setTheme($type, $theme);
        }
    }
}