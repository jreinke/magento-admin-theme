<?php
/**
 * @category    Bubble
 * @package     Bubble_AdminTheme
 * @version     1.4.3
 * @copyright   Copyright (c) 2015 BubbleShop (https://www.bubbleshop.net)
 */
class Bubble_AdminTheme_Model_Adminhtml_System_Config_Source_Themes extends Mage_Core_Model_Abstract
{
    public function toOptionArray()
    {
        $themes = Mage::getConfig()->getNode('adminhtml/themes');
        $options = array();
        foreach ($themes->children() as $key => $node) {
            $module = $node->getAttribute('module') ? $node->getAttribute('module') : 'adminhtml';
            $label = Mage::helper($module)->__((string) $node->label);
            $options[] = array(
                'value' => $key,
                'label' => $label,
            );
        }

        return $options;
    }
}