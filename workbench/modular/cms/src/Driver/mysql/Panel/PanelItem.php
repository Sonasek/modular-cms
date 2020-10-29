<?php

namespace Modular\Cms\Driver\Mysql\Panel;

use Modular\Cms\Panel\PanelItemInterface;
use Modular\Core\BaseClass\Item;

/**
 * Class PanelItem
 *
 * @package \Modular\Cms\Driver\Mysql\Panel
 */
class PanelItem extends Item implements \Modular\Cms\Panel\PanelItemInterface
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var int
     */
    protected $section_id;

    /**
     * @var int
     */
    protected $type_id;

    /**
     * @var string
     */
    protected $code;

    /**
     * @var string
     */
    protected $view;

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
     * @return int
     */
    public function getSectionId(): int
    {
        return $this->section_id;
    }

    /**
     * @return int
     */
    public function getTypeId(): int
    {
        return $this->type_id;
    }

    /**
     * @return array
     */
    public function getCode(): array
    {
        return json_decode($this->code, true);
    }

    /**
     * @return string
     */
    public function getView(): string
    {
        return $this->view;
    }

    /**
     * @return int
     */
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
     * @param \Modular\Cms\Panel\PanelItemInterface $childItem
     */
    public function addChild(PanelItemInterface $childItem): void
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

    /**
     * @return bool
     */
    public function hasChild(): bool
    {
        if(0 == count($this->childItems)){
            return false;
        }

        return true;
    }
}
