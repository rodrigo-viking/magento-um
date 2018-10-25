<?php

class Academia_HelloWorld_IndexController extends Mage_Core_Controller_Front_Action{
    
    public function indexAction(){
        echo "Hello World";
    }

    public function olaAction(){
        echo "Ola";
    }

    public function blocksAction(){
        $this->loadLayout();
        $block = $this->getLayout()->createBlock('Academia_HelloWorld/hello');
        $block->setText("Mensagem no bloco");
        $this->getLayout()->getBlock('content')->insert($block);
        $this->renderLayout();
    }
}