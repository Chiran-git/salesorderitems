<?php

namespace Chiran\OrderItem\Model\ResourceModel\SalesOrderItem;

use \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{

    /**
     * Remittance File Collection Constructor
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Chiran\OrderItem\Model\SalesOrderItem', 'Chiran\OrderItem\Model\ResourceModel\SalesOrderItem');
    } 

    //Single Join
    protected function _initSelect()
    {

        parent::_initSelect();
        $this->getSelect()->joinLeft(
                ['secondTable' => $this->getTable('store')],
                'main_table.store_id = secondTable.store_id',
                ['code']
            );
        $this->getSelect()->joinLeft(
                ['thirdTable' => $this->getTable('sales_order_grid')],
                'main_table.order_id = thirdTable.entity_id',
                ['increment_id', 'status', 'store_name', 'billing_name', 'shipping_name']
            );

        $this->addFilterToMap('name', 'main_table.name');
        $this->addFilterToMap('created_at', 'main_table.created_at');
        $this->addFilterToMap('updated_at', 'main_table.updated_at');
    }

}