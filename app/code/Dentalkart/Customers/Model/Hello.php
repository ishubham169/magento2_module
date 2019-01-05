<?php
namespace Dentalkart\Customers\Model;
use Dentalkart\Customers\Api\HelloInterface;
use Dentalkart\Customers\Model\DataExampleFactory;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\App\Action\Context;
class Hello implements HelloInterface
{
    protected $welcomeFactory;

    public function __construct(
        \Dentalkart\Customers\Model\WelcomeFactory $welcomeFactory
    ){
        $this->welcomeFactory = $welcomeFactory;

    }
    /**
     * Returns greeting message to user
     *
     * @api
     * @param string $name Users name.
     * @return string Greeting message with users name.
     */
    public function name($name) {
        return "Hello ".$name;
    }

    public function get_details()
    {
        $model = $this->welcomeFactory->create();
        $datacollection=$model->getCollection();
        foreach ($datacollection as $data) {
            // $json['Name']=$data->getCustomerName();
            // $json['Address']=$data->getCustomerAddress();
            // $json['Phone']=$data->getCustomerPhoneNumber();
            // $a[]=$json;
            $a[] = $data;
        }
        // $ans=array();
        // $ans['Details']=$a;
        return $a;
    }
    public function create_entry($entity)
    {
         $entity->save();
         return "saved";
    }
    public function get_data_by_id($id)
    {
        $model = $this->welcomeFactory->create()->load($id);
        $datacollection=$model->getCollection();

        return $model;
    }
}
