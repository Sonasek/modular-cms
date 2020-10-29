<?php

namespace Modular\Cms\Panel;

use Modular\Cms\Section\SectionItemInterface;
use Modular\Core\Driver\Mysql\RepositoryInterface;

interface PanelRepositoryInterface extends RepositoryInterface
{
    /**
     * @param \Modular\Cms\Section\SectionItemInterface $sectionItem
     *
     * @return array
     */
    public function getBySection(SectionItemInterface $sectionItem): array;
    /**
     * @param array $collection
     *
     * @return array
     */
    public function getBySections(array $collection): array;
}
