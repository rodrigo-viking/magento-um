<?php

class Academia_Aula03Exercicio01_IndexController extends Mage_Core_Controller_Front_Action{

    public function blocksAction(){
        $this->loadLayout();
        $block = $this->getLayout()->createBlock('Academia_Aula03Exercicio01/viking');
        $block->setText("Viking");
        $this->getLayout()->getBlock('content')->insert($block);
        $this->renderLayout();
    }
}