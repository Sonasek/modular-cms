<?php

namespace Modular\Cms\Driver\Mysql\Footer;

use Modular\Core\BaseClass\Item;

/**
 * Class FooterItem
 *
 * @package \Modular\Cms\Driver\Mysql\Footer
 */
class FooterItem extends Item implements \Modular\Cms\Footer\FooterItemInterface
{
    /**
     * @var int
     */
    protected $id;

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
