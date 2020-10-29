<?php

namespace Modular\Cms\Driver\Mysql\PanelType;

use Modular\Core\Driver\Mysql\Repository;

/**
 * Class PanelRepository
 *
 * @package \Modular\Cms\Driver\Mysql\Panel
 */
class PanelTypeRepository extends Repository implements \Modular\Cms\PanelType\PanelTypeRepositoryInterface
{
    protected $tableName = 'modular_cms_panel_type';
    protected $columns = [
        'id',
        'name',
        'view',
        'group',
        'data',
    ];

    /**
     * @return array
     */
    public function getAll(): array
    {
        if ([] == $this->inMemoryItems) {
            $this->inMemoryItems = $this->convertToItems(
                $this->getSqlBuilder()->get(),
                PanelTypeItem::class
            );
        }

        return $this->inMemoryItems;
    }

    /**
     * @param string $group
     *
     * @return array
     */
    public function getByGroup(string $group): array
    {
        if (!isset($this->inMemoryItems[$group])) {
            $this->inMemoryItems[$group] = $this->convertToItems(
                $this->getSqlBuilder()
                    ->where('group', '=', $group)
                    ->get(),
                PanelTypeItem::class
            );
        }

        return $this->getItemFromMemory($group);
    }

    /**
     * @param array $groups
     *
     * @return array
     */
    public function getByGroups(array $groups): array
    {
        $setGroups = $this->getItemsFromMemory($groups);

        if(count($groups) !== count($setGroups))
        {
            $panels = $this->convertToItems(
                $this->getSqlBuilder()
                    ->whereIn('group', array_diff($setGroups, $setGroups))
                    ->get(),
                PanelTypeItem::class
            );

            foreach ($panels as $panel){
                $this->inMemoryItems[$panel->getSectionId()][] = $panel;
            }
        }

        return $this->getItemsFromMemory($groups);
    }
}
