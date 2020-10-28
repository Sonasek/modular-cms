<?php

namespace Modular\Cms\Cms;

interface CmsContainerInterface
{
    /**
     * Inicializuje stránku včetně veškerého obsahu podle zadaného tagu
     *
     * @param string $tag
     *
     * @return \Modular\Cms\Cms\CmsContainerInterface|null
     */
    public function initPageByTag(string $tag): ?CmsContainerInterface;

}
