<?php

class JR_AdminTheme_Block_Adminhtml_Widget_Button extends Mage_Adminhtml_Block_Widget_Button
{
    protected function _toHtml()
    {
        $html = $this->getBeforeHtml().'<button '
            . ($this->getId()?' id="'.$this->getId() . '"':'')
            . ($this->getElementName()?' name="'.$this->getElementName() . '"':'')
            . ($this->getTitle()?' title="'.$this->getTitle() . '"':'')
            . ' type="'.$this->getType() . '"'
            . ' class="scalable ' . $this->getClass() . ($this->getDisabled() ? ' disabled' : '') . '"'
            . ' onclick="'.$this->getOnClick().'"'
            . ' style="'.$this->getStyle() .'"'
            . ($this->getValue()?' value="'.$this->getValue() . '"':'')
            . ($this->getDisabled() ? ' disabled="disabled"' : '')
            . '><span><span><span>' .$this->getLabel().'</span></span></span></button>'.$this->getAfterHtml();

        return $html;
    }
}
