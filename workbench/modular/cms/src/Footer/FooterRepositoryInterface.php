<?php

namespace Modular\Cms\Footer;

use Modular\Core\Driver\Mysql\RepositoryInterface;

interface FooterRepositoryInterface extends RepositoryInterface
{
    /**
     * @return array
     */
    public function getData(): array;
}
