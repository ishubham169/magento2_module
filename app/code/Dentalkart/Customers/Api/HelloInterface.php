<?php
namespace Dentalkart\Customers\Api;

interface HelloInterface
{

    /**
     * Returns greeting message to user
     *
     * @api
     * @param string $name Users name.
     * @return string Greeting message with users name.
     */

    public function name($name);

    /**
    *@return \Dentalkart\Customers\Api\Data\HelloDataInterface[]
    */
    public function get_details();

    /**
    *@param \Dentalkart\Customers\Api\Data\HelloDataInterface
    *
    *@return string
    */
    public function create_entry($entity);

    /**
    *@param int
    *@return \Dentalkart\Customers\Api\Data\HelloDataInterface
    */
    public function get_data_by_id($id);
}
