<?php

namespace Modular\Cms\Driver\Mysql\PanelType;

use Modular\Core\BaseClass\Item;

/**
 * Class PanelTypeItem
 *
 * @package \Modular\Cms\Driver\Mysql\PanelType
 */
class PanelTypeItem extends Item implements \Modular\Cms\PanelType\PanelTypeItemInterface
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $view;

    /**
     * @var string
     */
    protected $group;

    /**
     * @var string
     */
    protected $data;

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
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getView(): string
    {
        return $this->view;
    }

    /**
     * @return string
     */
    public function getGroup(): string
    {
        return $this->group;
    }

    /**
     * @return string
     */
    public function getData(): string
    {
        return $this->data;
    }
}
