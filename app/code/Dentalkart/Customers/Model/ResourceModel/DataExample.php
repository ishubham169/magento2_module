<?php
namespace Dentalkart\Customers\Model\ResourceModel;
class DataExample extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb{
 public function _construct(){
 $this->_init("dentalkart_customers_post","id");
 }
}
 ?>
