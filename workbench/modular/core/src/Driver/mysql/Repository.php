<?php

namespace Modular\Core\Driver\Mysql;

use Illuminate\Support\Facades\DB;
use Modular\Core\Traits\ConvertToItemsTrait;

/**
 * Class Repository
 *
 * @package \Modular\Core\BaseClass
 */
abstract class Repository implements RepositoryInterface
{
    use ConvertToItemsTrait;

    protected $tableName;
    protected $columns;
    protected $inMemoryItems = [];

    protected function getItemFromMemory($repositoryKey)
    {
        return $this->inMemoryItems[$repositoryKey];
    }

    protected function getItemsFromMemory(array $repositoryKeys): array
    {
        $output = [];
        if(0 !== count($this->inMemoryItems)){
            foreach($this->inMemoryItems as $key => $repository){
                if(in_array($key, $repositoryKeys)){
                    $output[$key] = $repository;
                }
            }
        }
        return $output;
    }

    protected function getSqlBuilder()
    {
        return DB::table($this->tableName)
            ->select($this->columns);
    }
}
