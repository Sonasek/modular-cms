<?php

/* Pro registraci singletonu */

return [
    \Modular\Cms\Datalayer\DatalayerRepositoryInterface::class => \Modular\Cms\Driver\Mysql\Datalayer\DatalayerRepository::class,
    \Modular\Cms\Footer\FooterRepositoryInterface::class => \Modular\Cms\Driver\Mysql\Footer\FooterRepository::class,
    \Modular\Cms\Header\HeaderRepositoryInteface::class => \Modular\Cms\Driver\Mysql\Header\HeaderRepository::class,
    \Modular\Cms\Menu\MenuRepositoryInterface::class => \Modular\Cms\Driver\Mysql\Menu\MenuRepository::class,
    \Modular\Cms\Page\PageRepositoryInterface::class => \Modular\Cms\Driver\Mysql\Page\PageRepository::class,
    \Modular\Cms\Panel\PanelRepositoryInterface::class => \Modular\Cms\Driver\Mysql\Panel\PanelRepository::class,
    \Modular\Cms\Section\SectionRepositoryInterface::class => \Modular\Cms\Driver\Mysql\Section\SectionRepository::class,
];
