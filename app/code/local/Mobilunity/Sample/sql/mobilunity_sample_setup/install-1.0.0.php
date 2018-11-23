<?php

$installer = $this;

$installer->startSetup();
/**
 * @category    local
 * @package     Mobilunity_Sample
 * @author      Kovalenko Olexandr <olexandr.filin@gmail.com>
 */

$table = $installer->getConnection()
    ->newTable($installer->getTable('mobilunity_sample/coefficient'))
    ->addColumn('coefficient_id', Varien_Db_Ddl_Table::TYPE_INTEGER, null, array(
        'identity'  => true,
        'unsigned'  => true,
        'nullable'  => false,
        'primary'   => true,
    ), 'Id')
    ->addColumn('order_id', Varien_Db_Ddl_Table::TYPE_INTEGER, null, array(
        'unsigned'  => true,
        'nullable'  => false,
        'primary'   => true,
    ), 'Order id')
    ->addColumn('decimal_factor', Varien_Db_Ddl_Table::TYPE_DECIMAL, '12,4', array(
        'nullable'  => false,
        'default'   => '0.0000',
    ), 'Decimal Factor')
    ->addColumn('value', Varien_Db_Ddl_Table::TYPE_DECIMAL, '12,4', array(
        'nullable'  => false,
        'default'   => '0.0000',
    ), 'Order grand total multiplied by the decimal factor');
$installer->getConnection()->createTable($table);

$installer->endSetup();
