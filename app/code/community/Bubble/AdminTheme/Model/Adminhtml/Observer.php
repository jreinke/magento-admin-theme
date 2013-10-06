<?php

class Bubble_AdminTheme_Model_Adminhtml_Observer
{
    public function setTheme()
    {
        Mage::getDesign()
            ->setArea('adminhtml')
            ->setTheme((string) Mage::getStoreConfig('bubble_admintheme/config/theme'));
    }
}