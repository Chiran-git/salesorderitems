<?php
 
namespace Ranium\OrderItem\Controller\Adminhtml\Item;
 
class Index extends \Magento\Framework\App\Action\Action
{
	/** @var \Magento\Framework\View\Result\PageFactory  */
	protected $resultPageFactory;

	public function __construct( \Magento\Framework\App\Action\Context $context,
	     						\Magento\Framework\View\Result\PageFactory $resultPageFactory) 
	{
	     $this->resultPageFactory = $resultPageFactory;
	     parent::__construct($context);
	}

	/**
     * Is the user allowed to view the order item grid.
     *
     * @return bool
     */
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Ranium_OrderItem::order');
    }

	/**
	* Load the page defined in view/adminhtml/layout/samplenewpage_sampleform_index.xml
	*
	* @return \Magento\Framework\View\Result\Page
	*/
	public function execute()
	{	
		$resultPage = $this->resultPageFactory->create();
		$resultPage->getConfig()->getTitle()->prepend(__('Order Items'));
	    return $resultPage;
	}


}