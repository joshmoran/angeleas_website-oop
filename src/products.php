<?php

namespace AW;

class products extends database
{
    private $sql = "SELECT * FROM products";

    function getAllProducts($filter = null)
    {
        $result  = '';
        if ($filter != null) {
            $sqlProducts = $this->sql . ' WHERE id = ' . $filter;
        } else {
            $sqlProducts = $this->sql;
        }

        $query = parent::db_get_assoc($sqlProducts);
        
        return $query;
    }
}
