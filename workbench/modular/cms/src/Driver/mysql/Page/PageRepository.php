<?php

namespace Modular\Cms\Driver\Mysql\Page;

use Modular\Cms\Page\PageItemInterface;
use Modular\Core\Driver\Mysql\Repository;

/**
 * Class PageRepository
 *
 * @package \Modular\Cms\Driver\Mysql\Page
 */
class PageRepository extends Repository implements \Modular\Cms\Page\PageRepositoryInterface
{
    protected $tableName = 'modular_cms_page';
    protected $columns = [
        'id',
        'name',
        'tag',
        'show_hero',
        'title',
        'subtitle',
        'content',
    ];

    /**
     * @param string $tag
     *
     * @return \Modular\Cms\Page\PageItemInterface
     */
    public function getByTag(string $tag): ?PageItemInterface
    {
        if (!isset($this->inMemoryItems[$tag])) {
            $pageItem = $this->getSqlBuilder()
                ->where('tag', '=', $tag)
                ->first();

            if(null == $pageItem){
                return null;
            }

            $this->inMemoryItems[$tag] = new PageItem($pageItem);
        }

        return $this->getItemFromMemory($tag);
    }
}
