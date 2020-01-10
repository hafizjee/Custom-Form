<?php

/**
* Ecommerce Resource Collection
*/
namespace Hafiz\Ecommerce\Model\ResourceModel\Ecommerce;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection{
/**
* Resource initialization
*
* @return void
*/
protected function _construct(){
$this->_init('Hafiz\Ecommerce\Model\Ecommerce', 'Hafiz\Ecommerce\Model\ResourceModel\Ecommerce');
}
}
