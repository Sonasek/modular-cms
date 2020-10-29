<?php

namespace Modular\Cms\SectionType;

interface SectionTypeItemInterface
{
    /**
     * @return int
     */
    public function getId(): int;

    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @return string
     */
    public function getView(): string;

    /**
     * @return string
     */
    public function getGroup(): string;

    /**
     * @return string
     */
    public function getData(): string;
}
