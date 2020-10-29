<?php

namespace Modular\Cms\Driver\Mysql\SectionType;

use Modular\Core\BaseClass\Item;

/**
 * Class SectionTypeItem
 *
 * @package \Modular\Cms\Driver\Mysql\SectionType
 */
class SectionTypeItem extends Item implements \Modular\Cms\SectionType\SectionTypeItemInterface
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
