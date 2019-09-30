<?php
namespace Ranium\OrderItem\Ui\Component\Listing\Column;

use \Magento\Sales\Api\OrderRepositoryInterface;
use \Magento\Framework\View\Element\UiComponent\ContextInterface;
use \Magento\Framework\View\Element\UiComponentFactory;
use \Magento\Ui\Component\Listing\Columns\Column;
use \Magento\Framework\Api\SearchCriteriaBuilder;
 
class StoreCode extends Column
{
 
    protected $_orderRepository;
    protected $_searchCriteria;
    protected $_storefactory;
 
    public function __construct(
        ContextInterface $context,
        UiComponentFactory $uiComponentFactory,
        OrderRepositoryInterface $orderRepository,
        SearchCriteriaBuilder $criteria,
        array $components = [], array $data = [])
    {
        $this->_orderRepository = $orderRepository;
        $this->_searchCriteria  = $criteria;
        parent::__construct($context, $uiComponentFactory, $components, $data);
    }
 
    public function prepareDataSource(array $dataSource)
    {  

        if (isset($dataSource['data']['items'])) {

            foreach ($dataSource['data']['items'] as & $item) {

                $order  = $this->_orderRepository->get($item["order_id"]);

                $store_data = $order->getStore()->getData();

                

                //$item['store_code'] = $store_data['code'];
                $item['increment_id'] = $order->getIncrementId();
                $item['bill_to_name'] = $order->getCustomerName();
                $item['status'] = $order->getStatusLabel();
                $item['grand_total'] = $order->getBaseGrandTotal();
                $item['purchase_point'] = $order->getStoreGroupName();
                //$item['grand_total_pur'] = $order->getPurchasedGrandTotal();

            }
        }
        return $dataSource;
    }
}