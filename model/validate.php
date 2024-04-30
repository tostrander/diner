<?php

/* Validate data for the diner app
 */

// Return true if food contains at least 3 chars
function validFood($food)
{
    return strlen(trim($food)) >= 3;
}

// Return true if meal is valid
function validMeal($meal)
{
    return in_array($meal, getMeals());
}