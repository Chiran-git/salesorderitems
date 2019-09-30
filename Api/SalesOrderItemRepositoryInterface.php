<?php 
namespace Ranium\OrderItem\Api;
 
 
interface SalesOrderItemRepositoryInterface {


	/**
     * @return Ranium\orderItem\Api\Data\SalesOrderItemInterface[]
     */
	public function getOrderItem();

	/**
	 * @param int $id
     * @return Ranium\orderItem\Api\Data\SalesOrderItemInterface
     */
	public function getOrderItemById($id);

}
