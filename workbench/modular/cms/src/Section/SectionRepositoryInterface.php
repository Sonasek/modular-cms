<?php

namespace Modular\Cms\Section;

use Modular\Cms\Page\PageItemInterface;
use Modular\Core\Driver\Mysql\RepositoryInterface;

interface SectionRepositoryInterface extends RepositoryInterface
{
    /**
     * @param \Modular\Cms\Page\PageItemInterface $pageItem
     *
     * @return array
     */
    public function getDataByPage(PageItemInterface $pageItem): array;
}
