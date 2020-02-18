<?php

namespace MooCat\Helpers;

class CommonHelper
{
    public static function generateOrderNumber(): int
    {
        return (int)hexdec(uniqid());
    }
}