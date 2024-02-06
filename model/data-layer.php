<?php

/*
 * This file represents the data layer for my diner app
 * 328/diner/model/data-layer.php
 */

function getMeals()
{
    return array('breakfast', 'brunch', 'lunch', 'dinner');
}

function getCondiments() {
    return array('ketchup', 'mustard', 'mayo', 'sriracha', 'relish');
}