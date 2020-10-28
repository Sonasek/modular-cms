<?php

namespace Modular\Cms\Driver\Mysql\Panel;

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
     * @var string
     */
    protected $type;

    /**
     * @var string
     */
    protected $code;

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
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }

}
