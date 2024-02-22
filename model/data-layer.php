<?php

/*
 * This file represents the data layer for my diner app
 * 328/diner/model/data-layer.php
 *
 * CREATE TABLE orders (
    order_id INT(8) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    food VARCHAR(50),
    meal VARCHAR(20),
    condiments VARCHAR(50),
    date_time DATETIME DEFAULT NOW()
    )
    INSERT INTO orders (food, meal, condiments) VALUES ('hot dog', 'lunch', 'relish, mustard, sauerkraut');
 */

// Require the file that contains DB config
require_once($_SERVER['DOCUMENT_ROOT'].'/../config.php');


class DataLayer
{
    /**
     * @var PDO The database connection object
     */
    private $_dbh;

    /**
     * DataLayer constructor
     */
    function __construct()
    {
        try {
            // Instantiate a PDO database connection object
            $this->_dbh = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD);
            echo 'Connected to database!';
        }
        catch (PDOException $e) {
            echo $e->getMessage(); # temporary
        }
    }

    /**
     * View all orders from the Diner
     * @return array The Diner Orders
     */
    function getOrders()
    {
        //1. Define the query
        $sql = "SELECT * FROM orders";

        //2. Prepare the statement
        $statement = $this->_dbh->prepare($sql);

        //3. Bind the parameters

        //4. Execute the query
        $statement->execute();

        //5. Process the results, if needed
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);

        //Return the results
        return $result;
    }

    static function getMeals()
    {
        return array('breakfast', 'brunch', 'lunch', 'dinner');
    }

    static function getCondiments() {
        return array('ketchup', 'mustard', 'mayo', 'sriracha', 'relish');
    }
}