<?php

namespace DTS\eBaySDK\Test\Mocks;

class StaticMethods
{
    public static function defaultConfigValue($configuration)
    {
        return -1;
    }

    public static function applyConfigValue($value, array &$configuration): void
    {
        $configuration['foo'] = 3;
    }
}
