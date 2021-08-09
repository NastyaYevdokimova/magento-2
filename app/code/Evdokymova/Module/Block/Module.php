<?php
namespace Evdokymova\Module\Block;

class Module extends \Magento\Framework\View\Element\Template
{
    public function outWord($title){
        $a='example' . $title;
	return $a;
    }
}
