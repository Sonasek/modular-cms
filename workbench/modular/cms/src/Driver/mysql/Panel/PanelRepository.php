<?php

namespace Modular\Cms\Driver\Mysql\Panel;

use Illuminate\Support\Facades\DB;
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
        'modular_cms_panel.id',
        'section_id',
        'type_id',
        'parent_id',
        'code',
        'order',
        'view',
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
            $panels = $this->sortChild(
                $this->convertToItems(
                    $this->getSqlBuilder()
                        ->whereIn('section_id', array_diff($sectionIds, $setSectionIds))
                        ->get(),
                    PanelItem::class
                )
            );

            foreach ($panels as $panel){
                $this->inMemoryItems[$panel->getSectionId()][] = $panel;
            }
        }

        return $this->getItemsFromMemory($sectionIds);
    }

    private function sortChild(array $unsortedPanelItems, $parentId = null): array
    {
        $sortedPanelItems = [];
        $panelsToSort = [];

        foreach($unsortedPanelItems as $unsortedPanelItem){
            if($parentId == $unsortedPanelItem->getParentId()){
                $sortedPanelItems[$unsortedPanelItem->getId()] = $unsortedPanelItem;
            }
            else {
                $panelsToSort[] = $unsortedPanelItem;
            }
        }

        foreach($sortedPanelItems as $sortedPanelItem){
            foreach($this->sortChild($panelsToSort, $sortedPanelItem->getId()) as $panel){
                $sortedPanelItem->addChild($panel);
            }
        }


        return $sortedPanelItems;
    }

    protected function getSqlBuilder()
    {
        return DB::table($this->tableName)
            ->select($this->columns)
            ->join('modular_cms_panel_type', 'modular_cms_panel.type_id', '=', 'modular_cms_panel_type.id')
            ->orderBy('order', 'desc');
    }
}
