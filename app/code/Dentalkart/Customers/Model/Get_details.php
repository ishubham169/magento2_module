<?php
namespace Dentalkart\Customers\Model;
use Dentalkart\Customers\Api\HelloInterface;

class Get_details implements HelloInterface
{
    /**
     * Returns greeting message to user
     *
     * @api
     * @param string $name Users name.
     * @return string Greeting message with users name.
     */
    public function get_details() {

    }
}
