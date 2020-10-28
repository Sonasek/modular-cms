<?php

namespace Modular\Cms\Page;

interface PageItemInterface
{
    /**
     * Vrátí id stránky
     *
     * @return int
     */
    public function getId(): int;

    /**
     * Vrátí název stránky
     *
     * @return string
     */
    public function getName(): string;

    /**
     * Vrátí tag stránky
     *
     * @return string
     */
    public function getTag(): string;

    /**
     * @return bool
     */
    public function showHero(): bool;

    /**
     * @return string|null
     */
    public function getTitle(): ?string;

    /**
     * @return string|null
     */
    public function getSubtitle(): ?string;

    /**
     * @return string|null
     */
    public function getContent(): ?string;

}
