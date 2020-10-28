<?php

namespace Modular\Cms\Driver\Mysql\Header;

use Modular\Core\BaseClass\Item;

/**
 * Class HeaderItem
 *
 * @package \Modular\Cms\Driver\Mysql\Header
 */
class HeaderItem extends Item implements \Modular\Cms\Header\HeaderItemInterface
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
    protected $title;

    /**
     * @var string
     */
    protected $meta;

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
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getMeta(): string
    {
        return $this->meta;
    }


}
