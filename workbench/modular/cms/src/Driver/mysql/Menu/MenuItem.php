<?php

namespace Modular\Cms\Driver\Mysql\Menu;

use Modular\Cms\Menu\MenuItemInterface;
use Modular\Core\BaseClass\Item;

/**
 * Class MenuItem
 *
 * @package \Modular\Cms\Driver\Mysql\Menu
 */
class MenuItem extends Item implements \Modular\Cms\Menu\MenuItemInterface
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $label;

    /**
     * @var int
     */
    protected $page_id;

    /**
     * @var string
     */
    protected $link;

    /**
     * @var string
     */
    protected $icon;

    /**
     * @var int
     */
    protected $parent_id;

    /**
     * @var int
     */
    protected $order;

    /**
     * @var array
     */
    protected $childItems = [];

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getLabel(): string
    {
        return $this->label;
    }

    /**
     * @return int
     */
    public function getPageId(): int
    {
        return $this->page_id;
    }

    /**
     * @return string
     */
    public function getLink(): string
    {
        return $this->link;
    }

    public function getOrder(): int
    {
        return $this->order;
    }

    /**
     * @return int|null
     */
    public function getParentId(): ?int
    {
        return $this->parent_id;
    }

    /**
     * @return string|null
     */
    public function getIcon(): ?string
    {
        return $this->icon;
    }

    /**
     * @param \Modular\Cms\Menu\MenuItemInterface $childItem
     */
    public function addChild(MenuItemInterface $childItem): void
    {
        $this->childItems[$childItem->getId()] = $childItem;
    }

    /**
     * @return array
     */
    public function getChildItems(): array
    {
        return $this->childItems;
    }

    public function hasChild(): bool
    {
        if(0 == count($this->childItems)){
            return false;
        }

        return true;
    }


}
