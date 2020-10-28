<?php

namespace Modular\Cms\Datalayer;

use Modular\Cms\Page\PageItemInterface;

interface DatalayerRepositoryInterface
{
    /**
     * @param \Modular\Cms\Page\PageItemInterface|null $pageItem
     *
     * @return array
     */
    public function getDataByPage(?PageItemInterface $pageItem): array;
}
