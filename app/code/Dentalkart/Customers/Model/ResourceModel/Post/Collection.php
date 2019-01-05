<?php
namespace Dentalkart\Customers\Model\ResourceModel\Post;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
	protected $_idFieldName = 'post_id';
	protected $_eventPrefix = 'dentalkart_customers_post_collection';
	protected $_eventObject = 'post_collection';

	/**
	 * Define resource model
	 *
	 * @return void
	 */
	protected function _construct()
	{
		$this->_init('Dentalkart\Customers\Model\Post', 'Dentalkart\Customers\Model\ResourceModel\Post');
	}

}
