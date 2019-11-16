<?php

namespace Chiran\OrderItem\Model;

use Chiran\OrderItem\Model\SalesOrderItemFactory;
use Chiran\OrderItem\Model\ResourceModel\SalesOrderItem;
use Chiran\OrderItem\Api\SalesOrderItemRepositoryInterface;
use Chiran\OrderItem\Model\ResourceModel\SalesOrderItem\CollectionFactory;

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
     * @return Chiran\OrderItem\Api\Data\SalesOrderItemInterface
     */
	public function getOrderItem()
	{
		return $this->collectionFactory->create()->getItems();
	}

	/**
	 * @param int $id
     * @return Chiran\OrderItem\Api\Data\SalesOrderItemInterface
     */
	public function getOrderItemById($id)
	{
		$abc = $this->orderItemFactory->create();
		return $abc->load($id);
	}


}