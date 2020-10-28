<?php

namespace Modular\Cms\Driver\Mysql\Section;

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
        'id',
        'page_id',
        'name',
        'title',
        'subtitle',
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
}
