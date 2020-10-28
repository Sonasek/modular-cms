<?php

namespace Modular\Cms\Header;

use Modular\Cms\Page\PageItemInterface;
use Modular\Core\Driver\Mysql\RepositoryInterface;

interface HeaderRepositoryInteface extends RepositoryInterface
{
    /**
     * @param \Modular\Cms\Page\PageItemInterface $pageItem
     *
     * @return \Modular\Cms\Header\HeaderItemInterface|null
     */
    public function getDataByPage(PageItemInterface $pageItem): ?HeaderItemInterface;

}
