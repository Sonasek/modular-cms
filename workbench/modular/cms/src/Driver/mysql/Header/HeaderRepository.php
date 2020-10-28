<?php

namespace Modular\Cms\Driver\Mysql\Header;

use Modular\Cms\Header\HeaderItemInterface;
use Modular\Cms\Page\PageItemInterface;
use Modular\Core\Driver\Mysql\Repository;

/**
 * Class HeaderRepositoryInterface
 *
 * @package \Modular\Cms\Driver\Mysql\Header
 */
class HeaderRepository extends Repository implements \Modular\Cms\Header\HeaderRepositoryInteface
{
    protected $tableName = 'modular_cms_header';
    protected $columns = [
        'id',
        'page_id',
        'title',
        'meta',
    ];

    /**
     * @param \Modular\Cms\Page\PageItemInterface $pageItem
     *
     * @return \Modular\Cms\Header\HeaderItemInterface|null
     */
    public function getDataByPage(PageItemInterface $pageItem): ?HeaderItemInterface
    {
        if (!isset($this->inMemoryItems[$pageItem->getId()])) {
            $this->inMemoryItems[$pageItem->getId()] = new HeaderItem(
                $this->getSqlBuilder()
                    ->where('page_id', '=', $pageItem->getId())
                    ->first()
            );
        }

        return $this->getItemFromMemory($pageItem->getId());
    }
}
