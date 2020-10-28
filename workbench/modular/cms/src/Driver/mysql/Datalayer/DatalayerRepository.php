<?php

namespace Modular\Cms\Driver\Mysql\Datalayer;

use Modular\Cms\Page\PageItemInterface;
use Modular\Core\Driver\Mysql\Repository;

/**
 * Class DatalayerRepository
 *
 * @package \Modular\Cms\Driver\Mysql\Datalayer
 */
class DatalayerRepository extends Repository implements \Modular\Cms\Datalayer\DatalayerRepositoryInterface
{
    protected $tableName = 'modular_cms_datalayer';
    protected $columns = [
        'id',
        'page_id',
        'type',
        'code',
    ];

    /**
     * @param \Modular\Cms\Page\PageItemInterface|null $pageItem
     *
     * @return array
     */
    public function getDataByPage(?PageItemInterface $pageItem): array
    {
        if (!isset($this->inMemoryItems[$pageItem->getId()])) {
            $this->inMemoryItems[$pageItem->getId()] =  $this->convertToItems(
                $this->getSqlBuilder()
                    ->where('page_id', '=', $pageItem->getId())
                    ->orWhere('type', '=', 'global')
                    ->get(),
                DatalayerItem::class
            );
        }

        return $this->getItemFromMemory($pageItem->getId());
    }

}
