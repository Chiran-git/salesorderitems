<?php 
namespace Chiran\OrderItem\Api;
 
 
interface SalesOrderItemRepositoryInterface {


	/**
     * @return Chiran\orderItem\Api\Data\SalesOrderItemInterface[]
     */
	public function getOrderItem();

	/**
	 * @param int $id
     * @return Chiran\orderItem\Api\Data\SalesOrderItemInterface
     */
	public function getOrderItemById($id);

}
