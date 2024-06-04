<?php

/* This is my Data Layer.
 * It belongs to the Model.
 *
 * CREATE TABLE orders (
 	order_id INT(6) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    food VARCHAR(50),
    meal VARCHAR(20),
    condiments VARCHAR(50),
    date_time DATETIME DEFAULT NOW()
   )

 */
class DataLayer
{
    // Add a field to store the db connection object
    private $_dbh;

    /**
     * DataLayer constructor connects to PDO Database
     */
    function __construct()
    {
        // Require my PDO database connection credentials
        require_once $_SERVER['DOCUMENT_ROOT'].'/../config.php';

        try {
            //Instantiate our PDO Database Object
            $this->_dbh = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD);
            //echo 'Connected to database!!';
        }
        catch (PDOException $e) {
            die( $e->getMessage() );
            //die("<p>Something went wrong!</p>");
        }
    }

    /**
     * Save a restaurant order to the database
     * @param $order an Order object
     * @return int the Order ID
     */
    function saveOrder($order)
    {
        // 1. Define the query
        $sql = 'INSERT INTO orders (food, meal, condiments) 
                VALUES (:food, :meal, :condiments)';

        // 2. Prepare the statement
        $statement = $this->_dbh->prepare($sql);

        // 3. Bind the parameters (if there are any)
        $food = $order->getFood();
        $meal = $order->getMeal();
        $condiments = $order->getCondiments();
        $statement->bindParam(':food', $food);
        $statement->bindParam(':meal', $meal);
        $statement->bindParam(':condiments', $condiments);

        // 4. Execute the query
        $statement->execute();

        // 5. Get the primary key
        $id = $this->_dbh->lastInsertId();
        return $id;
    }

    /**
     * Get the orders from the database
     * @return $result Assoc array of orders
     */
    function getOrders()
    {
        // 1. Define the query
        $sql = "SELECT order_id, food, meal, condiments, date_time FROM orders";

        // 2. Prepare the statement
        $statement = $this->_dbh->prepare($sql);

        // 4. Execute the statement
        $statement->execute();

        // 5. Process the results
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    // Get the meals for the Diner app
    static function getMeals()
    {
        return array('breakfast', 'brunch', 'lunch', 'dinner', 'dessert');
    }

    static function getCondiments()
    {
        return array('ketchup', 'mustard', 'sriracha', 'kim chi', 'sour cream');
    }
}