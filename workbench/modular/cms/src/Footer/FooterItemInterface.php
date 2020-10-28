<?php

namespace Modular\Cms\Footer;

interface FooterItemInterface
{
    /**
     * @return int
     */
    public function getId(): int;

    /**
     * @return string
     */
    public function getType(): string;

    /**
     * @return string
     */
    public function getCode(): string;
}
