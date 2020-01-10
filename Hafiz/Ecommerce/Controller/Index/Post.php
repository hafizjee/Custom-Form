<?php
namespace Hafiz\Ecommerce\Controller\Index;

class Post extends \Magento\Framework\App\Action\Action{
/**
* Post user question
*
* @return void
* @throws \Exception
*/
public function execute(){
$post = $this->getRequest()->getPostValue();

if (!$post) {
$this->_redirect('hafiz/index');
return;
}

try {
$postObject = new \Magento\Framework\DataObject();
$postObject->setData($post);

$error = false;

if (!\Zend_Validate::is(trim($post['fname']), 'NotEmpty')) {
$error = true;
}
if (!\Zend_Validate::is(trim($post['lname']), 'NotEmpty')) {
$error = true;
}

if (!\Zend_Validate::is(trim($post['email']), 'EmailAddress')) {
$error = true;
}
if (\Zend_Validate::is(trim($post['hideit']), 'NotEmpty')) {
$error = true;
}
if ($error) {
throw new \Exception();
}
// $storeScope = \Magento\Store\Model\ScopeInterface::SCOPE_STORE;
// $transport = $this->_transportBuilder
// ->setTemplateIdentifier($this->scopeConfig->getValue(self::XML_PATH_EMAIL_TEMPLATE, $storeScope))
// ->setTemplateOptions(
// [
// 'area' => \Magento\Backend\App\Area\FrontNameResolver::AREA_CODE,
// 'store' => \Magento\Store\Model\Store::DEFAULT_STORE_ID,
// ]
// )
// ->setTemplateVars(['data' => $postObject])
// ->setFrom($this->scopeConfig->getValue(self::XML_PATH_EMAIL_SENDER, $storeScope))
// ->addTo($this->scopeConfig->getValue(self::XML_PATH_EMAIL_RECIPIENT, $storeScope))
// ->setReplyTo($post['email'])
// ->getTransport();
//
// $transport->sendMessage();

$fname   = $post['fname'];
$lname   = $post['lname'];
$cphone  = $post['phone'];
$cemail  = $post['email'];
$cwinery = $post['winery'];
$czip    = $post['zip'];

echo $post['email'];
exit();

// data insert through api
// $authToken = '334130e9cfe0dfdf61be343e0c983ab0-us7';
// // The data to send to the API
// $postData = array(
//     "email_address" => $cemail,
//      "status" => "subscribed",
//      "merge_fields" => array(
//        "FNAME"   => $fname,
//        "LNAME"   => $lname,
//        "PHONE"   => $cphone,
//        "MMERGE5" => $cwinery,
//        "MMERGE3" => $czip)
// );
//
// // Setup cURL
// $ch = curl_init('https://us7.api.mailchimp.com/3.0/lists/98793f4185/members/');
// curl_setopt_array($ch, array(
//     CURLOPT_POST => TRUE,
//     CURLOPT_RETURNTRANSFER => TRUE,
//     CURLOPT_HTTPHEADER => array(
//         'Authorization: apikey '.$authToken,
//         'Content-Type: application/json'
//     ),
//     CURLOPT_POSTFIELDS => json_encode($postData)
// ));
// // Send the request
// $response = curl_exec($ch);
// $obj= json_decode($response);
// //echo $obj->status;
// //print_r($response);
// //exit();
// if($obj->status == 400){
//   $this->messageManager->addError(
//   __('This Email is already use')
//   );
//   $this->getResponse()->setRedirect($this->_redirect->getRedirectUrl());
//   return;
//   throw new \Exception();
//   }
// ####()###################################################################
$model = $this->_objectManager->create('Hafiz\Ecommerce\Model\Ecommerce');
$model->setFirstName($fname);
$model->setEmail($cemail);
$model->setLastName($lname);
$model->setPhone($cphone);
$model->setWinery($cwinery);
$model->setZip($czip);
$model->save();
$this->messageManager->addSuccess(
__('Thanks for contacting us with your comments and questions.')
);
$this->_redirect('thankyou-signup');
return;
}catch (\Exception $e) {
$this->messageManager->addError(
__('We can\’t process your request right now. Sorry, that\’s all we know.')
);
$this->_redirect('hafiz/index');
return;
}
}
}
