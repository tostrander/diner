<?php

/* Validate data for the diner app
 */
class Validate
{
    // TODO: Add PHP doc blocks

    // Return true if food contains at least 3 chars
    static function validFood($food)
    {
        return strlen(trim($food)) >= 3;
    }

    // Return true if meal is valid
    static function validMeal($meal)
    {
        return in_array($meal, DataLayer::getMeals());
    }
}