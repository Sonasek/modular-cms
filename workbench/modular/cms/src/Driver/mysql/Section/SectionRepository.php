<?php

namespace Modular\Cms\Driver\Mysql\Section;

use Illuminate\Support\Facades\DB;
use Modular\Cms\Page\PageItemInterface;
use Modular\Core\Driver\Mysql\Repository;

/**
 * Class SectionRepository
 *
 * @package \Modular\Cms\Driver\Mysql\Section
 */
class SectionRepository extends Repository implements \Modular\Cms\Section\SectionRepositoryInterface
{
    protected $tableName = 'modular_cms_section';
    protected $columns = [
        'modular_cms_section.id',
        'page_id',
        'modular_cms_section.name',
        'title',
        'subtitle',
        'type_id',
        'modular_cms_section.data',
        'view'
    ];

    /**
     * @param \Modular\Cms\Page\PageItemInterface $pageItem
     *
     * @return array
     */
    public function getDataByPage(PageItemInterface $pageItem): array
    {
        if (!isset($this->inMemoryItems[$pageItem->getId()])) {
            $this->inMemoryItems[$pageItem->getId()] = $this->convertToItems(
                $this->getSqlBuilder()
                    ->where('page_id', '=', $pageItem->getId())
                    ->get(),
                SectionItem::class
            );
        }

        return $this->getItemFromMemory($pageItem->getId());
    }

    protected function getSqlBuilder()
    {
        return DB::table($this->tableName)
            ->select($this->columns)
            ->leftJoin('modular_cms_section_type', 'modular_cms_section.type_id', '=', 'modular_cms_section_type.id');
    }
}
