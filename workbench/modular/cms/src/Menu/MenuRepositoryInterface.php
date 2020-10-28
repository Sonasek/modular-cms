<?php

namespace Modular\Cms\Menu;

use Modular\Cms\Page\PageItemInterface;
use Modular\Core\Driver\Mysql\RepositoryInterface;

interface MenuRepositoryInterface extends RepositoryInterface
{
    /**
     * @param \Modular\Cms\Page\PageItemInterface $pageItem
     *
     * @return array
     */
    public function getDataByPage(PageItemInterface $pageItem): array;
}
