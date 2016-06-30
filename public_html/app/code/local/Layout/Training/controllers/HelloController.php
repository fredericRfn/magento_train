<?php

class Layout_Training_HelloController extends Mage_Core_Controller_Front_Action
{
    public function indexAction() {
        $main_block = new Layout_Training_Block_HelloBlock();
        echo $main_block ->toHtml();
    }

    public function layoutAction() {
        $layout = Mage::getSingleton('core/layout');
        $block = $layout->createBlock('layout_training/helloBlock','root');
        $layout -> addOutputBlock('root');
        $layout -> setDirectOutput(true);
        $layout -> getOutput();
    }
    
}