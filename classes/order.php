<?php

/**
 * The Order class represents a food order for the GRC Diner
 * @author Tina Ostrander
 * @copyright 2024
 */
class Order
{
    private $_food;
    private $_meal;
    private $_condiments;

    /**
     * Default constructor instantiates an Order object
     * new Order()
     * new Order("tacos")
     * new Order("tacos", "lunch")
     * new Order("tacos", "lunch", "salsa, guacamole")
     * @param string $food
     * @param string $meal
     * @param string $condiments
     */
    public function __construct($food="", $meal="", $condiments="")
    {
        $this->_food = $food;
        $this->_meal = $meal;
        $this->_condiments = $condiments;
    }

    /**
     * Return the food that was ordered
     * @return string
     */
    public function getFood()
    {
        return $this->_food;
    }

    /**
     * Set the food that was ordered
     * @param string $food
     */
    public function setFood($food)
    {
        $this->_food = $food;
    }

    /**
     * Return the meal that was ordered
     * @return string
     */
    public function getMeal()
    {
        return $this->_meal;
    }

    /**
     * Set the meal that was ordered
     * @param string $meal
     */
    public function setMeal($meal)
    {
        $this->_meal = $meal;
    }

    /**
     * Return the condiments that were ordered
     * @return string
     */
    public function getCondiments()
    {
        return $this->_condiments;
    }

    /**
     * Set the condiments that were ordered
     * @param string $condiments
     */
    public function setCondiments($condiments)
    {
        $this->_condiments = $condiments;
    }
}
