<?php

namespace Chiran\OrderItem\Model\ResourceModel;

use \Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class SalesOrderItem extends AbstractDb
{
    /**
     * Post Abstract Resource Constructor
     * @return void
     */
    protected function _construct()
    { 
        $this->_init('sales_order_item', 'item_id');
    }

    /**
     * Retrieve select object for load object data
     *
     * @param string $field
     * @param mixed $value
     * @param \Magento\Framework\Model\AbstractModel $object
     * @return \Magento\Framework\DB\Select
     */
    protected function _getLoadSelect($field, $value, $object)
    {
        $field = $this->getConnection()->quoteIdentifier(sprintf('%s.%s', $this->getMainTable(), $field));
        
        $select = $this->getConnection()
            ->select()
            ->from($this->getMainTable())
            ->where($field . '=?', $value)
            ->join('store',
            'sales_order_item.store_id = store.store_id',
            ['code'])
            ->join('sales_order_grid',
            'sales_order_item.order_id = sales_order_grid.entity_id',
            ['increment_id', 'status', 'store_name', 'billing_name', 'shipping_name']);

        return $select;
    }
}