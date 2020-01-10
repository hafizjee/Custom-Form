<?php
namespace Hafiz\Ecommerce\Model\ResourceModel;

/**
* Ecommerce Resource Model
*/
class Ecommerce extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb{
/**
* Initialize resource model
*
* @return void
*/
protected function _construct(){
$this->_init('hafiz_ecommerce', 'id');
}
}
