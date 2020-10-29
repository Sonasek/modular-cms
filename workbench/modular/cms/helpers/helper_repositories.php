<?php

if (!function_exists('modularCmsDatalayer')) {
    /**
     * @return \Modular\Cms\Driver\Mysql\Datalayer\DatalayerRepository
     */
    function modularCmsDatalayer(): \Modular\Cms\Driver\Mysql\Datalayer\DatalayerRepository
    {
        static $service = null;

        if (null === $service) {
            $service = app(\Modular\Cms\Driver\Mysql\Datalayer\DatalayerRepository::class);
        }

        return $service;
    }
}

if (!function_exists('modularCmsFooter')) {
    /**
     * @return \Modular\Cms\Driver\Mysql\Footer\FooterRepository
     */
    function modularCmsFooter(): \Modular\Cms\Driver\Mysql\Footer\FooterRepository
    {
        static $service = null;

        if (null === $service) {
            $service = app(\Modular\Cms\Driver\Mysql\Footer\FooterRepository::class);
        }

        return $service;
    }
}

if (!function_exists('modularCmsHeader')) {
    /**
     * @return \Modular\Cms\Driver\Mysql\Header\HeaderRepository
     */
    function modularCmsHeader(): \Modular\Cms\Driver\Mysql\Header\HeaderRepository
    {
        static $service = null;

        if (null === $service) {
            $service = app(\Modular\Cms\Driver\Mysql\Header\HeaderRepository::class);
        }

        return $service;
    }
}

if (!function_exists('modularCmsMenu')) {
    /**
     * @return \Modular\Cms\Driver\Mysql\Menu\MenuRepository
     */
    function modularCmsMenu(): \Modular\Cms\Driver\Mysql\Menu\MenuRepository
    {
        static $service = null;

        if (null === $service) {
            $service = app(\Modular\Cms\Driver\Mysql\Menu\MenuRepository::class);
        }

        return $service;
    }
}

if (!function_exists('modularCmsPage')) {
    /**
     * @return \Modular\Cms\Driver\Mysql\Page\PageRepository
     */
    function modularCmsPage(): \Modular\Cms\Driver\Mysql\Page\PageRepository
    {
        static $service = null;

        if (null === $service) {
            $service = app(\Modular\Cms\Driver\Mysql\Page\PageRepository::class);
        }

        return $service;
    }
}

if (!function_exists('modularCmsPanel')) {
    /**
     * @return \Modular\Cms\Driver\Mysql\Panel\PanelRepository
     */
    function modularCmsPanel(): \Modular\Cms\Driver\Mysql\Panel\PanelRepository
    {
        static $service = null;

        if (null === $service) {
            $service = app(\Modular\Cms\Driver\Mysql\Panel\PanelRepository::class);
        }

        return $service;
    }
}

if (!function_exists('modularCmsSection')) {
    /**
     * @return \Modular\Cms\Driver\Mysql\Section\SectionRepository
     */
    function modularCmsSection(): \Modular\Cms\Driver\Mysql\Section\SectionRepository
    {
        static $service = null;

        if (null === $service) {
            $service = app(\Modular\Cms\Driver\Mysql\Section\SectionRepository::class);
        }

        return $service;
    }
}

if (!function_exists('modularCmsPanelType')) {
    /**
     * @return \Modular\Cms\Driver\Mysql\PanelType\PanelTypeRepository
     */
    function modularCmsPanelType(): \Modular\Cms\Driver\Mysql\PanelType\PanelTypeRepository
    {
        static $service = null;

        if (null === $service) {
            $service = app(\Modular\Cms\Driver\Mysql\PanelType\PanelTypeRepository::class);
        }

        return $service;
    }
}

if (!function_exists('modularCmsSectionType')) {
    /**
     * @return \Modular\Cms\Driver\Mysql\SectionType\SectionTypeRepository
     */
    function modularCmsSectionType(): \Modular\Cms\Driver\Mysql\SectionType\SectionTypeRepository
    {
        static $service = null;

        if (null === $service) {
            $service = app(\Modular\Cms\Driver\Mysql\SectionType\SectionTypeRepository::class);
        }

        return $service;
    }
}
