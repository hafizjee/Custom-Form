<?php
namespace Hafiz\Ecommerce\Model;

/**
* Ecommerce Model
*
* @method \Hafiz\Ecommerce\Model\Resource\Page _getResource()
* @method \Hafiz\Ecommerce\Model\Resource\Page getResource()
*/
class Ecommerce extends \Magento\Framework\Model\AbstractModel{
/**
* Initialize resource model
*
* @return void
*/
protected function _construct(){
$this->_init('Hafiz\Ecommerce\Model\ResourceModel\Ecommerce');
}
}
