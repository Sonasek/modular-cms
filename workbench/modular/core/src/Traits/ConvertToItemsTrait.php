<?php

namespace Modular\Core\Traits;

use Illuminate\Support\Collection;

trait ConvertToItemsTrait
{
    /**
     * @param \Illuminate\Support\Collection $collection
     * @param string                         $class
     *
     * @return array
     */
    public function convertToItems(Collection $collection, string $class): array
    {
        $output = [];
        foreach($collection as $stdClass){
            if(isset($stdClass->id)){
                $output[$stdClass->id] = new $class($stdClass);
            }
            else {
                $output[] = new $class($stdClass);
            }
        }
        return $output;
    }

    /**
     * @param \stdClass|null $stdClass
     * @param string         $class
     *
     * @return mixed
     */
    public function convertToItem(?\stdClass $stdClass, string $class)
    {
        return (null == $stdClass)
            ? $stdClass
            : new $class($stdClass);
    }

}
