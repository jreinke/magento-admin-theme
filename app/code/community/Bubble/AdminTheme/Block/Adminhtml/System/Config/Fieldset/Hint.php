<?php
/**
 * @category    Bubble
 * @package     Bubble_AdminTheme
 * @version     1.3.0
 * @copyright   Copyright (c) 2014 BubbleShop (https://www.bubbleshop.net)
 */
class Bubble_AdminTheme_Block_Adminhtml_System_Config_Fieldset_Hint
    extends Mage_Adminhtml_Block_Abstract
    implements Varien_Data_Form_Element_Renderer_Interface
{
    protected $_template = 'bubble/admintheme/system/config/fieldset/hint.phtml';

    public function render(Varien_Data_Form_Element_Abstract $element)
    {
        return $this->toHtml();
    }
}