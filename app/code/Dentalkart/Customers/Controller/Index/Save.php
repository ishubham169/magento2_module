<?php
namespace Dentalkart\Customers\Controller\Index;
use Dentalkart\Customers\Model\DataExampleFactory;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\App\Action\Context;
class Save extends \Magento\Framework\App\Action\Action
{
    protected $_pageFactory;

    protected $_postFactory;
    protected $_dataExample;
    protected $resultRedirect;
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Dentalkart\Customers\Model\DataExampleFactory  $dataExample,
        \Magento\Framework\Controller\ResultFactory $result
        )
        {
            parent::__construct($context);
            $this->_dataExample = $dataExample;
            $this->resultRedirect = $result;
        }
        
        public function execute()
        {
            $name = $this->getRequest()->getPostValue("CUSTOMER_NAME");
            $phone = $this->getRequest()->getPostValue("PHONE_NUMBER");
            $address = $this->getRequest()->getPostValue("ADDRESS");

            $resultRedirect = $this->resultRedirect->create(ResultFactory::TYPE_REDIRECT);
            $resultRedirect->setUrl($this->_redirect->getRefererUrl());
            $model = $this->_dataExample->create();
            $model->addData([
                "customer_name" => $name,
                "customer_phone_number" => $phone,
                "customer_address" => $address
            ]);
            $saveData = $model->save();

            if($saveData){
                $this->messageManager->addSuccess( __('Insert Record Successfully !') );
            }
            return $resultRedirect;

            // return;
            // $post = $this->_postFactory->create();
            // $collection = $post->getCollection();
            // foreach($collection as $item){
            // 	echo "<pre>";
            // 	print_r($item->getData());
            // 	echo "</pre>";
            // }
            // exit();

        }
    }
    ?>
