<?php
namespace Dentalkart\Customers\Setup;

class InstallSchema implements \Magento\Framework\Setup\InstallSchemaInterface
{

	public function install(\Magento\Framework\Setup\SchemaSetupInterface $setup, \Magento\Framework\Setup\ModuleContextInterface $context)
	{
		$installer = $setup;
		$installer->startSetup();
		if (!$installer->tableExists('dentalkart_customers_post')) {
			$table = $installer->getConnection()->newTable(
				$installer->getTable('dentalkart_customers_post')
			)
				->addColumn(
					'customer_id',
					\Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
					null,
					[
						'identity' => true,
						'nullable' => false,
						'primary'  => true,
						'unsigned' => true,
					],
					'Post customer id'
				)
        ->addColumn(
					'customer_name',
					\Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
					null,
					[
						'nullable' => false,
						'primary'  => false
					],
					'Post customer name'
				)
        ->addColumn(
					'customer_phone_number',
					\Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
					null,
					[
						'nullable' => false,
						'primary'  => false
					],
					'Post phone number'
				)
        ->addColumn(
					'customer_address',
					\Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
					null,
					[
						'nullable' => false,
						'primary'  => false
					],
					'Post address'
				)
				->setComment('Post Table');
			$installer->getConnection()->createTable($table);

			// $installer->getConnection()->addIndex(
			// 	$installer->getTable('dentalkart_customers_post'),
			// 	$setup->getIdxName(
			// 		$installer->getTable('dentalkart_customers_post'),
			// 		['customer_id','customer_name','customer_phone_number','customer_address'],
			// 		\Magento\Framework\DB\Adapter\AdapterInterface::INDEX_TYPE_FULLTEXT
			// 	),
			// 	['customer_id','customer_name','customer_phone_number','customer_address'],
			// 	\Magento\Framework\DB\Adapter\AdapterInterface::INDEX_TYPE_FULLTEXT
			// );
		}
		$installer->endSetup();
	}
}
?>
