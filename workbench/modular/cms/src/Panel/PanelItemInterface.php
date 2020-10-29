<?php

namespace Modular\Cms\Panel;

interface PanelItemInterface
{
    /**
     * @return int
     */
    public function getId(): int;

    /**
     * @return int
     */
    public function getSectionId(): int;

    /**
     * @return int
     */
    public function getTypeId(): int;

    /**
     * @return array
     */
    public function getCode(): array;

    /**
     * @return string
     */
    public function getView(): string;
}
