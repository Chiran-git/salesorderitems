<?php
namespace Chiran\OrderItem\Api\Data;


interface SalesOrderItemInterface
{
    /**
     * Constants for keys of data array. Identical to the name of the getter in snake case
     */
    const ITEM_ID = 'item_id';
    const INCREMENT_ID = 'increment_id';
    const STORE_CODE = 'code';
    const ITEM_NAME = 'name';
    const PURCHASE_DATE = 'created_at';
    const STORE_NAME = 'store_name';
    const BILLING_NAME = 'billing_name';
    const SHIPPING_NAME = 'shipping_name';
    const ORIGINAL_PRICE = 'base_original_price';
    const ITEM_STATUS = 'status';
    const QUANTITY_ORDERED = 'qty_ordered';

    /**
     * Get ID
     *
     * @return int|null
     */
    public function getItemId();

    /**
     * Get String
     *
     * @return string|null
     */
    public function getIncrementId();

    /**
     * Get String
     *
     * @return string|null
     */
    public function getStoreCode();

    /**
     * Get String
     *
     * @return string|null
     */
    public function getItemName();

    /**
     * Get String
     *
     * @return string|null
     */
    public function getPurchaseDate();

    /**
     * Get String
     *
     * @return string|null
     */
    public function getPurchasePoint();

    /**
     * Get String
     *
     * @return string|null
     */
    public function getBillingName();

    /**
     * Get String
     *
     * @return string|null
     */
    public function getShippingName();

    /**
     * Get String
     *
     * @return float|null
     */
    public function getOriginalPrice();

    /**
     * Get String
     *
     * @return string|null
     */
    public function getItemStatus();

    /**
     * Get Integer
     *
     * @return integer|null
     */
    public function getQuantityOrdered();

}
