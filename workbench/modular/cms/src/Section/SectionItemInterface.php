<?php

namespace Modular\Cms\Section;

use Modular\Cms\Panel\PanelItemInterface;

interface SectionItemInterface
{
    /**
     * @return int
     */
    public function getId(): int;

    /**
     * @return int
     */
    public function getPageId(): int;

    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @return string
     */
    public function getTitle(): string;

    /**
     * @return string
     */
    public function getSubtitle(): string;

    /**
     * @param \Modular\Cms\Panel\PanelItemInterface $panel
     */
    public function addPanel(PanelItemInterface $panel): void;

    /**
     * @return array
     */
    public function getPanels(): array;

    /**
     * @return int
     */
    public function getTypeId(): int;

    /**
     * @return string
     */
    public function getData(): string;

    /**
     * @return string
     */
    public function getView(): string;

}
