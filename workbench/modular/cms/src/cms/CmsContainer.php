<?php

namespace Modular\Cms\Cms;

class CmsContainer implements CmsContainerInterface
{
    /**
     * @var \Modular\Cms\Page\PageItemInterface
     */
    protected $page;

    /**
     * @var \Modular\Cms\Header\HeaderItemInterface
     */
    protected $header;

    /**
     * @var array
     */
    protected $datalayer;

    /**
     * @var array
     */
    protected $menu;

    /**
     * @var array
     */
    protected $sections;

    /**
     * @var array
     */
    protected $footer;

    /**
     * Inicializuje stránku včetně veškerého obsahu podle zadaného tagu
     *
     * @param string $tag
     *
     * @return \Modular\Cms\Cms\CmsContainerInterface|null
     */
    public function initPageByTag(string $tag): ?CmsContainerInterface
    {
        if(null == $this->page = modularCmsPage()->getByTag($tag)){
            return null;
        }

        // načteme obsah head tagu
        $this->header = modularCmsHeader()->getDataByPage($this->page);

        // načteme obsah datalayeru
        $this->datalayer = modularCmsDatalayer()->getDataByPage($this->page);

        // načteme data pro horní menu
        $this->menu = modularCmsMenu()->getDataByPage($this->page);

        // načteme data pro jednotlivé sekce na stránce
        $this->sections = modularCmsSection()->getDataByPage($this->page);

        // načteme data pro jednotlivé panely v sekcích
        $panels = modularCmsPanel()->getBySections($this->sections);
        foreach($panels as $panel) {
            foreach ($panel as $item)
            {
                $this->sections[$item->getSectionId()]->addPanel($item);
            }
        }


        // načteme data pro footer
        $this->footer = modularCmsFooter()->getData();

        return $this;
    }

    /**
     * @return \Modular\Cms\Page\PageItemInterface
     */
    public function getPage(): \Modular\Cms\Page\PageItemInterface
    {
        return $this->page;
    }

    /**
     * @return \Modular\Cms\Header\HeaderItemInterface
     */
    public function getHeader(): \Modular\Cms\Header\HeaderItemInterface
    {
        return $this->header;
    }

    /**
     * @return arrray
     */
    public function getDatalayer(): array
    {
        return $this->datalayer;
    }

    /**
     * @return array
     */
    public function getMenu(): array
    {
        return $this->menu;
    }

    /**
     * @return array
     */
    public function getSections(): array
    {
        return $this->sections;
    }

    /**
     * @return array
     */
    public function getFooter(): array
    {
        return $this->footer;
    }
}
