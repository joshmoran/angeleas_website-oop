<?php

namespace AW;

class address extends customer
{
    private $addresses = array();

    public function __construct()
    {
        parent::__construct(null);
    }


    // GETTERS
    public function getAddresses()
    {
        return $this->addresses;
    }

    // SETTERS
    public function setAddresses($object)
    {
        foreach ($object as $$value) {
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
}
