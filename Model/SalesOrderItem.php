<?php

namespace Ranium\OrderItem\Model;

use \Magento\Framework\Model\AbstractModel;
use \Magento\Framework\DataObject\IdentityInterface;
use Ranium\OrderItem\Api\Data\SalesOrderItemInterface;

/**
 * Class File
 * @package Ranium\OrderItem\Model
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
class SalesOrderItem extends AbstractModel implements SalesOrderItemInterface
{
    /**
     * Cache tag
     */
    const CACHE_TAG = 'sales_order_item';

    /**
     * Post Initialization
     * @return void
     */
    protected function _construct()
    { 
        $this->_init('Ranium\OrderItem\Model\ResourceModel\SalesOrderItem');
    }

    /**
     * Get ID
     *
     * @return int|null
     */
    public function getItemId()
    {
        return $this->getData(self::ITEM_ID);
    }

    /**
     * Get String
     *
     * @return string|null
     */
    public function getIncrementId()
    {
        return $this->getdata(self::INCREMENT_ID);
    }

    /**
     * Get STORE CODE
     *
     * @return int|null
     */
    public function getStoreCode()
    {
        return $this->getdata(self::STORE_CODE);
    }

    /**
     * Get ITEM NAME
     *
     * @return int|null
     */
    public function getItemName()
    {
        return $this->getdata(self::ITEM_NAME);
    }

    /**
     * Get PURCHASE DATE
     *
     * @return string|null
     */
    public function getPurchaseDate()
    {
        return $this->getdata(self::PURCHASE_DATE);
    }
    
    /**
     * Get STORE NAME
     *
     * @return string|null
     */
    public function getPurchasePoint()
    {
        return $this->getdata(self::STORE_NAME);
    }

    /**
     * Get BILLING NAME
     *
     * @return string|null
     */
    public function getBillingName()
    {
        return $this->getdata(self::BILLING_NAME);
    }

    /**
     * Get SHIPPING NAME
     *
     * @return string|null
     */
    public function getShippingName()
    {
        return $this->getdata(self::SHIPPING_NAME);
    }

    /**
     * Get ORIGINAL PRICE
     *
     * @return float|null
     */
    public function getOriginalPrice()
    {
        return $this->getdata(self::ORIGINAL_PRICE);
    }

    /**
     * Get String
     *
     * @return string|null
     */
    public function getItemStatus()
    {
        return $this->getdata(self::ITEM_STATUS);
    }

    /**
     * Get Integer
     *
     * @return integer|null
     */
    public function getQuantityOrdered()
    {
        return $this->getdata(self::QUANTITY_ORDERED);
    }

}