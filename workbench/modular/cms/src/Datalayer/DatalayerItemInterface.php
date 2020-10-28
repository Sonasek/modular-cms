<?php

namespace Modular\Cms\Datalayer;

interface DatalayerItemInterface
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
    public function getType(): string;

    /**
     * @return string
     */
    public function getCode(): string;

}
