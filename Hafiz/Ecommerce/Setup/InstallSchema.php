<?php
namespace Hafiz\Ecommerce\Setup;
use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\DB\Ddl\Table;
/**
* @codeCoverageIgnore
*/
class InstallSchema implements InstallSchemaInterface{
/**
* {@inheritdoc}
* @SuppressWarnings(PHPMD.ExcessiveMethodLength)
*/
public function install(SchemaSetupInterface $setup, ModuleContextInterface $context){
$installer = $setup;
$installer->startSetup();

/**
* Creating table coming_soon
*/
$table = $installer->getConnection()->newTable(
$installer->getTable('hafiz_ecommerce')
)->addColumn(
'id',
\Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
null,
['identity' => true, 'unsigned' => true, 'nullable' => false, 'primary' => true],
'Entity Id'
)->addColumn(
'first_name',
\Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
255,
['nullable' => true],
'First Name'
)->addColumn(
'last_name',
\Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
255,
['nullable' => true],
'Last Name'
)->addColumn(
'phone',
\Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
null,
['nullable' => true,'default' => null],
'Phone'
)->addColumn(
'email',
\Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
255,
['nullable' => true,'default' => null],
'Email ID'
)->addColumn(
'winery',
\Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
255,
['nullable' => true],
'Winery'
)->addColumn(
'zip',
\Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
255,
['nullable' => true,'default' => null],
'Zip Code'
)->addColumn(
'created_at',
\Magento\Framework\DB\Ddl\Table::TYPE_TIMESTAMP,
null,
['nullable' => false],
'Created At'
)->setComment(
'Done'
);
$installer->getConnection()->createTable($table);
$installer->endSetup();
}
}
