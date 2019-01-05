<?php
namespace Dentalkart\Customers\Api\Data;

interface HelloDataInterface
{
    /**
     * @return int
     */
    public function getCustomerId();

    /**
     * @return string
     */
    public function getName();
    /**
     * @return string
     */
    public function getAddress();
    /**
     * @return string
     */
    public function getPhone();

    /**
     * @param int $customerId
     * @return \Dentalkart\Customers\Api\Data\HelloDataInterface
     */
    public function setCustomerId($customerId);

    /**
     * @param string $address
     * @return \Dentalkart\Customers\Api\Data\HelloDataInterface
     */
    public function setAddress($address);
    /**
     * @param string $name
     * @return \Dentalkart\Customers\Api\Data\HelloDataInterface
     */
    public function setName($name);

    /**
     * @param string $phone
     * @return \Dentalkart\Customers\Api\Data\HelloDataInterface
     */
    public function setPhone($phone);
}
 ?>
