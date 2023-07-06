<?php

namespace AW;

class products extends database
{
    private $sql = "SELECT * FROM products";

    function getAllProducts($filter = null)
    {
        $result  = array();;
        if ($filter != null) {
            $sqlProducts = $this->sql . ' WHERE id = ' . $filter;
        } else {
            $sqlProducts = $this->sql;
        }

        if ($sqlProducts != '')
            $query = parent::db_connect->query($sqlProducts);
        if ($query->num_rows > 0) {
            $row = $query->fetch_assoc();
            do {
                $result[] = $row;
            } while ($row = $query->fetch_assoc());
        }
        return $result;
    }
}
