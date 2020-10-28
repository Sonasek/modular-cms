<?php

namespace Modular\Cms\Driver\Mysql\Panel;

use Modular\Cms\Section\SectionItemInterface;
use Modular\Core\Driver\Mysql\Repository;

/**
 * Class PanelRepository
 *
 * @package \Modular\Cms\Driver\Mysql\Panel
 */
class PanelRepository extends Repository implements \Modular\Cms\Panel\PanelRepositoryInterface
{
    protected $tableName = 'modular_cms_panel';
    protected $columns = [
        'id',
        'section_id',
        'type',
        'code',
    ];

    /**
     * @param \Modular\Cms\Section\SectionItemInterface $sectionItem
     *
     * @return array
     */
    public function getBySection(SectionItemInterface $sectionItem): array
    {
        if (!isset($this->inMemoryItems[$sectionItem->getId()])) {
            $this->inMemoryItems[$sectionItem->getId()] = $this->convertToItems(
                $this->getSqlBuilder()
                    ->where('section_id', '=', $sectionItem->getId())
                    ->get(),
                PanelItem::class
            );
        }

        return $this->getItemFromMemory($sectionItem->getId());
    }

    /**
     * @param array $collection
     *
     * @return array
     */
    public function getBySections(array $collection): array
    {
        $sectionIds = [];
        foreach ($collection as $section) {
            $sectionIds[] = $section->getId();
        }
        $setSectionIds = $this->getItemsFromMemory($sectionIds);

        if(count($sectionIds) !== count($setSectionIds))
        {
            $panels = $this->convertToItems(
                $this->getSqlBuilder()
                    ->whereIn('section_id', array_diff($sectionIds, $setSectionIds))
                    ->get(),
                PanelItem::class
            );

            foreach ($panels as $panel){
                $this->inMemoryItems[$panel->getSectionId()][] = $panel;
            }
        }

        return $this->getItemsFromMemory($sectionIds);
    }
}
