<?php
namespace Dentalkart\Customers\Model\ResourceModel\Welcome;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected function _construct()
    {
        $this->_init('Dentalkart\Customers\Model\Welcome','Dentalkart\Customers\Model\ResourceModel\Welcome');
    }
}
