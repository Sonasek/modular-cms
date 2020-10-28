<?php

namespace Modular\Cms\Driver\Mysql\Datalayer;

use Modular\Core\BaseClass\Item;

/**
 * Class DatalayerItem
 *
 * @package \Modular\Cms\Driver\Mysql\Datalayer
 */
class DatalayerItem extends Item implements \Modular\Cms\Datalayer\DatalayerItemInterface
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
    public function getPageId(): int
    {
        return $this->page_id;
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
