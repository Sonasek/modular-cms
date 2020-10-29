<?php

namespace Modular\Cms\Driver\Mysql\Section;

use Modular\Cms\Panel\PanelItemInterface;
use Modular\Core\BaseClass\Item;

/**
 * Class SectionItem
 *
 * @package \Modular\Cms\Driver\Mysql\Section
 */
class SectionItem extends Item implements \Modular\Cms\Section\SectionItemInterface
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var int
     */
    protected $page_id;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $title;

    /**
     * @var string
     */
    protected $subtitle;

    /**
     * @var int
     */
    protected $type_id;

    /**
     * @var string
     */
    protected $data;

    /**
     * @var string
     */
    protected $view;

    /**
     * @var array
     */
    protected $panels = [];

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
    public function getPageId(): int
    {
        return $this->page_id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getSubtitle(): string
    {
        return $this->subtitle;
    }

    /**
     * @param \Modular\Cms\Panel\PanelItemInterface $panel
     */
    public function addPanel(PanelItemInterface $panel): void
    {
        $this->panels[$panel->getId()] = $panel;
    }

    /**
     * @return array
     */
    public function getPanels(): array
    {
        return $this->panels;
    }

    /**
     * @return int
     */
    public function getTypeId(): int
    {
        return $this->type_id;
    }

    /**
     * @return string
     */
    public function getData(): string
    {
        return $this->data;
    }

    /**
     * @return string
     */
    public function getView(): string
    {
        return $this->view;
    }

}
