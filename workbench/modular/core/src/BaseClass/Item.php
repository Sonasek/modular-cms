<?php

namespace Modular\Core\BaseClass;

/**
 * Class Item
 *
 * @package \Modular\Core\BaseClass
 */
abstract class Item implements ItemInterface
{
    public function __construct(\stdClass $item)
    {
        foreach(get_object_vars($item) as $attributeName => $attributeValue){
            $this->$attributeName = $attributeValue;
        }
    }
}
