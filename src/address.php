<?php 

namespace AW;

class address extends customer {
    private $addresses = array();

    public function __construct() {
        parent::__construct();
    }
    

    // GETTERS
    public function getAddresses() {
        return $this->addresses;
    }

    // SETTERS
    public function setAddresses($addresses) {
        foreach ($object as $$value){
            $this->addresses[] = array(
                'id' => $value['id'],
                'name' => $value['name'],
                'address' => $value['address'],
                'city' => $value['city'],
                'country' => $value['country'],
                'zipcode' => $value['zipcode'],
            );
        }
    }
}