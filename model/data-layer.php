<?php

/* This is my Data Layer.
 * It belongs to the Model.
 */

// Get the meals for the Diner app
function getMeals()
{
    return array('breakfast', 'brunch', 'lunch', 'dinner', 'dessert');
}

function getCondiments()
{
    return array('ketchup', 'mustard', 'sriracha', 'kim chi', 'sour cream');
}