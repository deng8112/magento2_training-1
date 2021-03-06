<?php
namespace Pulsestorm\HelloAdminBackend\Controller\Adminhtml\Index;
class Index extends \Magento\Backend\App\Action
{
    
    const ADMIN_RESOURCE = 'Index';       
        
    protected $resultPageFactory;
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory)
    {
        $this->resultPageFactory = $resultPageFactory;
        return parent::__construct($context);
    }

    public function execute()
    {
        $page = $this->resultPageFactory->create();
        $page->setActiveMenu('Pulsestorm_HelloAdminBackend::a_menu_item');
        $page->getConfig()->getTitle()->prepend(__('Our Custom Title'));
        return $page;
    }
}
