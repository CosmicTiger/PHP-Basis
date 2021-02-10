<?php

namespace app;

use PDO; // -> if this is not set. We have to call PDO like the following: \PDO

/**
 * Class Database
 * 
 * @author CosmicTiger
 * @package app
 * */

class Database
{

    //public $pdo; // -> classic php
    public \PDO $pdo; // -> implemented in PHP 7.4

    public function __construct()
    {
        $this->$pdo = new PDO('mysql:host=localhost;port=3306;dbname=products_crud', 'root', 'C@ncer160799');
        $this->$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function getProducts($search = '')
    {
        if ($search) {
            $statement = $this->$pdo->prepare('SELECT * FROM products WHERE title LIKE :title ORDER BY create_date DESC');
            $statement->bindValue(':title', "%$search%");
        } else {
            $statement = $this->$pdo->prepare('SELECT * FROM products ORDER BY create_date DESC');
        }
        $statement->execute();
        $products = $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}
