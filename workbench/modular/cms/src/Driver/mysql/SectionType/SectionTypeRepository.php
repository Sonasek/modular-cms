<?php

namespace Modular\Cms\Driver\Mysql\SectionType;

use Modular\Core\Driver\Mysql\Repository;

/**
 * Class SectionRepository
 *
 * @package \Modular\Cms\Driver\Mysql\Section
 */
class SectionTypeRepository extends Repository implements \Modular\Cms\SectionType\SectionTypeRepositoryInterface
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
                SectionTypeItem::class
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
                SectionTypeItem::class
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
                SectionTypeItem::class
            );

            foreach ($panels as $panel){
                $this->inMemoryItems[$panel->getSectionId()][] = $panel;
            }
        }

        return $this->getItemsFromMemory($groups);
    }
}
