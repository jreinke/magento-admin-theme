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
        Mage::getDesign()
            ->setArea('adminhtml')
            ->setTheme((string) Mage::getStoreConfig('bubble_admintheme/config/theme'));
    }
}