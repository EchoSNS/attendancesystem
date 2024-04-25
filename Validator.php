<?php

class Validator
{
    public static function string($value, $min = 1, $max = INF)
    {
        $value = trim($value);

        return (strlen($value) >= $min && strlen($value) <= $max);
    }

    public static function email($value, $min = 1, $max = INF)
    {
        return filter_var($value, FILTER_VALIDATE_EMAIL);
    }

    public static function integer($value, $min = 0, $max = INF)
    {
        return filter_var($value, FILTER_VALIDATE_INT) && $value >= $min && $value <= $max;
    }
    public static function date($date, $format = 'Y-m-d')
    {
        $d = DateTime::createFromFormat($format, $date);
        return $d && $d->format($format) == $date;
    }
}