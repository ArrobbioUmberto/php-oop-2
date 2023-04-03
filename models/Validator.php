<?php

trait Validator
{
    function testTitle($strToTest)
    {
        if (strlen($strToTest) < 0 || strlen($strToTest) > 20 || is_null($strToTest)) {
            return false;
        }
        return true;
    }
}
