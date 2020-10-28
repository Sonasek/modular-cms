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
     * @return string
     */
    public function getType(): string;

    /**
     * @return string
     */
    public function getCode(): string;
}
