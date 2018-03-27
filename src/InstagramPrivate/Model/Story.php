<?php

namespace InstagramPrivate\Model;

/**
 * Class Story
 * @package InstagramPrivate\Model
 */
class Story extends Media
{
    private $skip_prop = [
        'owner' => true,
    ];

    /***
     * We do not need some values - do not parse it for Story,
     * for example - we do not need owner object inside story
     *
     * @param $value
     * @param $prop
     * @param $arr
     */
    protected function initPropertiesCustom($value, $prop, $arr)
    {
        if (!empty($this->skip_prop[$prop])) {
            return;
        }
        parent::initPropertiesCustom($value, $prop, $arr);
    }
}