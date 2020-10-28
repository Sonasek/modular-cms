<?php

namespace Modular\Cms\Page;

use Modular\Core\Driver\Mysql\RepositoryInterface;

interface PageRepositoryInterface extends RepositoryInterface
{
    /**
     * @param string $tag
     *
     * @return \Modular\Cms\Page\PageItemInterface
     */
    public function getByTag(string $tag): ?PageItemInterface;
}
