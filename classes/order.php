<?php

/** Order class represents a diner order */
class Order
{
    private $_food;
    private $_meal;
    private $_condiments;

    /**
     * Constructor creates an Order object
     * @param $_food the food the user ordered
     * @param $_meal the selected meal
     * @param $_condiments the selected condiments
     */
    public function __construct($_food="", $_meal="", $_condiments="")
    {
        $this->_food = $_food;
        $this->_meal = $_meal;
        $this->_condiments = $_condiments;
    }

    /**
     * @return string|the
     */
    public function getFood()
    {
        return $this->_food;
    }

    /**
     * @param string|the $food
     */
    public function setFood($food)
    {
        $this->_food = $food;
    }

    /**
     * getMeal returns a meal selection
     * @return string|the meal that was ordered
     */
    public function getMeal()
    {
        return $this->_meal;
    }

    /**
     * @param string|the $meal
     */
    public function setMeal($meal)
    {
        $this->_meal = $meal;
    }

    /**
     * Returns the selected condiments
     * @return array An array of condiments
     */
    public function getCondiments()
    {
        return $this->_condiments;
    }

    /**
     * @param string|the $condiments
     */
    public function setCondiments($condiments)
    {
        $this->_condiments = $condiments;
    }
}