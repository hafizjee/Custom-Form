<?php
namespace Hafiz\Ecommerce\Block\Index;
use Hafiz\Ecommerce\Block\BaseBlock;
class Index extends BaseBlock{
/**
* Returns action url for contact form. Form submit URL
*
* @return string
*/
public function getFormAction(){
return $this->getUrl('hafiz/index/post', ['_secure' => true]);
}
}
