<?php

namespace Modular\Cms\Menu;

interface MenuItemInterface
{
    /**
     * @return int
     */
    public function getId(): int;

    /**
     * @return string
     */
    public function getLabel(): string;
    /**
     * @return int
     */
    public function getPageId(): int;

    /**
     * @return string
     */
    public function getLink(): string;

    /**
     * @return int|null
     */
    public function getParentId(): ?int;

    /**
     * @return string|null
     */
    public function getIcon(): ?string;

    /**
     * @param \Modular\Cms\Menu\MenuItemInterface $childItem
     */
    public function addChild(MenuItemInterface $childItem): void;

    /**
     * @return array
     */
    public function getChildItems(): array;

}
