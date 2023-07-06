<?php

namespace AW;

class address extends customer
{
    private $addresses = array();
    private $sql = "SELECT * FROM address";

    public function __construct($customer_id)
    {
        $sql = $this->sql . ' WHERE customer_id = ' . $customer_id;

        $query = parent::db_get_assoc($sql);

        foreach ($query as $key => $value) {
            $this->addresses[] = array(
                'id' => $value['id'],
                '1_line' => $value['1_line'],
                '2_line' => $value['2_line'],
                '3_line' => $value['3_line'],
                'region' => $value['region'],
                'postcode' => $value['postcode'],
            );
        }
    }


    // GETTERS
    public function getAddresses()
    {
        return $this->addresses;
    }
}
