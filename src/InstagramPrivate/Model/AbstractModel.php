<?php

namespace InstagramPrivate\Model;

use InstagramPrivate\Traits\ArrayLikeTrait;
use InstagramPrivate\Traits\InitializerTrait;

/**
 * Class AbstractModel
 * @package InstagramPrivate\Model
 */
abstract class AbstractModel implements \ArrayAccess
{
    use InitializerTrait, ArrayLikeTrait;

    /**
     * @var array
     */
    protected static $initPropertiesMap = [];

    /**
     * @return array
     */
    public static function getColumns()
    {
        return \array_keys(static::$initPropertiesMap);
    }
}