<?php

if (!function_exists('modularCmsContainer')) {
    /**
     * @return \Modular\Cms\Cms\CmsContainer
     */
    function modularCmsContainer(): \Modular\Cms\Cms\CmsContainer
    {
        static $container = null;

        if (null === $container) {
            $container = app(\Modular\Cms\Cms\CmsContainer::class);
        }

        return $container;
    }
}
