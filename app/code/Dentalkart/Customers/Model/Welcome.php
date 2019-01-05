<?php
namespace Dentalkart\Customers\Model;

class Welcome extends \Magento\Framework\Model\AbstractModel implements \Dentalkart\Customers\Api\Data\HelloDataInterface
{
    public function _construct()
    {
        $this->_init('Dentalkart\Customers\Model\ResourceModel\Welcome');
    }

    /**
     * @api
     * {@inheritdoc}
     */
    public function getCustomerId(){
        return $this->getData('customer_id');
    }

    /**
     * @api
     * {@inheritdoc}
     */
    public function getName(){
        return $this->getData('customer_name');
    }
    /**
     * @api
     * {@inheritdoc}
     */
    public function getAddress(){
        return $this->getData('customer_address');
    }
    /**
     * @api
     * {@inheritdoc}
     */
    public function getPhone(){
        return $this->getData('customer_phone_number');
    }

    /**
     * @api
     * {@inheritdoc}
     */
    public function setCustomerId($customerId){
        return $this->setData('customer_id', $customerId);
    }

    /**
     * @api
     * {@inheritdoc}
     */
    public function setAddress($address){
        return $this->setData('customer_address', $address);
    }
    /**
     * @api
     * {@inheritdoc}
     */
    public function setPhone($customerphone){
        return $this->setData('customer_phone_number', $customerphone);
    }

    /**
     * @api
     * {@inheritdoc}
     */
    public function setName($name){
        return $this->setData('customer_name', $name);
    }
}
