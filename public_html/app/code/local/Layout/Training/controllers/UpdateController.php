<?php

class Layout_Training_UpdateController extends Mage_Core_Controller_Front_Action
{
    public function indexAction() {
        $layout = Mage::getSingleton('core/layout');
        $xml = simplexml_load_string('<layout><block type="layout_training/helloBlock" name="root" output="toHtml"/></layout>','Mage_Core_Model_Layout_Element');

        $layout->setXml($xml);
        $layout->generateBlocks();
        echo $layout->setDirectOutput(true)->getOutput();
    }

    public function complexAction() {
        $layout = Mage::getSingleton('core/layout');
        $path = Mage::getModuleDir('','Layout_Training') . DS . 'page-layouts' . DS . 'complex.xml';
        $xml = simplexml_load_file($path,Mage::getConfig()->getModelClassName('core/layout_element'));
        $layout->setXml($xml);
        $layout->generateBlocks();
        echo $layout->setDirectOutput(true)->getOutput();
    }
}