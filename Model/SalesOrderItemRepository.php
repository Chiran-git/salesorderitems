<?php

namespace Ranium\OrderItem\Model;

use Ranium\OrderItem\Model\SalesOrderItemFactory;
use Ranium\OrderItem\Model\ResourceModel\SalesOrderItem;
use Ranium\OrderItem\Api\SalesOrderItemRepositoryInterface;
use Ranium\OrderItem\Model\ResourceModel\SalesOrderItem\CollectionFactory;

class SalesOrderItemRepository implements SalesOrderItemRepositoryInterface
{

	private $collectionFactory;
	private $orderItem;
	private $orderItemFactory;

	public function __construct(CollectionFactory $collectionFactory, 
								SalesOrderItemFactory $orderItemFactory, 
								SalesOrderItem $orderItem)
	{
		$this->collectionFactory = $collectionFactory;
		$this->orderItem = $orderItem;
		$this->orderItemFactory = $orderItemFactory;
	}
	/**
     * @return Ranium\OrderItem\Api\Data\SalesOrderItemInterface
     */
	public function getOrderItem()
	{
		return $this->collectionFactory->create()->getItems();
	}

	/**
	 * @param int $id
     * @return Ranium\OrderItem\Api\Data\SalesOrderItemInterface
     */
	public function getOrderItemById($id)
	{
		$abc = $this->orderItemFactory->create();
		return $abc->load($id);
	}


}