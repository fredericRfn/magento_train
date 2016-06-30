<?php

class Day_Two_RenderController extends Mage_Core_Controller_Front_Action
{
    public function indexAction() {
        $this->getResponse()->setBody('Hello Magento');
    }

    public function overrideAction() {
        $blockHtml=$this->getLayout()->createBlock('day_two/sample');
        $this->getResponse()->setBody($blockHtml)->toHtml();
    }

    public function templateAction() {
        $blockHtml = $this->getLayout()->createBlock('core/template')->setTemplate('day_two/random.phtml')->toHtml();
        $this->getResponse()->setBody($blockHtml);
    }
}