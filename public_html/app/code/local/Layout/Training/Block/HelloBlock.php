<?php

class Layout_Training_Block_HelloBlock extends Mage_Core_Block_Template
{
    public function _construct() {
        $this->setTemplate('layout_training/helloworld-2.phtml');
        return parent::_construct();
    }

    public function _beforeToHtml()
    {
        $block_1 = new Mage_Core_Block_Text();
        $block_1 -> setText('The first sentence.');
        $this -> setChild('the_first', $block_1);

        $block_2 = new Mage_Core_Block_Text();
        $block_2 -> setText('The second sentence.');
        $this -> setChild('the_first', $block_2);
    }

    public function fetchTitle() {
        return "Hello World!";
    }
    

}