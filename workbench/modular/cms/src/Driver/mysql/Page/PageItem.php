<?php

namespace Modular\Cms\Driver\Mysql\Page;

use Modular\Core\BaseClass\Item;

/**
 * Class PageItem
 *
 * @package \Modular\Cms\Driver\Mysql\Page
 */
class PageItem extends Item implements \Modular\Cms\Page\PageItemInterface
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
    protected $tag;

    /**
     * @var bool
     */
    protected $show_hero;

    /**
     * @var string
     */
    protected $title;

    /**
     * @var string
     */
    protected $subtitle;

    /**
     * @var string
     */
    protected $content;


    /**
     * Vrátí id stránky
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Vrátí název stránky
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Vrátí tag stránky
     *
     * @return string
     */
    public function getTag(): string
    {
        return $this->tag;
    }

    /**
     * @return bool
     */
    public function showHero(): bool
    {
        return boolval($this->show_hero);
    }

    /**
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @return string|null
     */
    public function getSubtitle(): ?string
    {
        return $this->subtitle;
    }

    /**
     * @return string|null
     */
    public function getContent(): ?string
    {
        return $this->content;
    }

}
