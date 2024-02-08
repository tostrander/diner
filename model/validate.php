<?php

/*
 * 328/diner/model/validate.php
 * Validate data for the diner app
 */

// Return true if food is valid
function validFood($food)
{
    if (trim($food) == "")
        return false;
    if (!ctype_alpha($food))
        return false;
    return true;
}