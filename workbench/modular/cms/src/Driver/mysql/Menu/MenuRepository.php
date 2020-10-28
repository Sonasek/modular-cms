<?php

namespace Modular\Cms\Driver\Mysql\Menu;

use Modular\Cms\Page\PageItemInterface;
use Modular\Core\Driver\Mysql\Repository;

/**
 * Class MenuRepository
 *
 * @package \Modular\Cms\Driver\Mysql\Menu
 */
class MenuRepository extends Repository implements \Modular\Cms\Menu\MenuRepositoryInterface
{
    protected $tableName = 'modular_cms_menu';
    protected $columns = [
        'id',
        'label',
        'link',
        'parent_id',
        'icon',
        'order',
    ];

    /**
     * @param \Modular\Cms\Page\PageItemInterface $pageItem
     *
     * @return array
     */
    public function getDataByPage(PageItemInterface $pageItem): array
    {
        if (!isset($this->inMemoryItems[$pageItem->getId()])) {
            $this->inMemoryItems[$pageItem->getId()] = $this->sortChild(
                $this->convertToItems(
                    $this->getSqlBuilder()
                        ->orderBy('order')
                        ->get(),
                    MenuItem::class
                )
            );
        }

        return $this->getItemFromMemory($pageItem->getId());
    }

    private function sortChild(array $unsortedMenuItems): array
    {
        $menuItems = [];
        $childItems = [];

        foreach($unsortedMenuItems as $unsortedMenuItem){
            if(null == $unsortedMenuItem->getParentId()){
                $menuItems[$unsortedMenuItem->getId()] = $unsortedMenuItem;
            }
            else {
                $childItems[] = $unsortedMenuItem;
            }
        }
        foreach($childItems as $childItem){
            $menuItems[$childItem->getParentId()]->addChild($childItem);
        }

        return $menuItems;
    }

}
