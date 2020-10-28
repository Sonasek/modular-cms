<?php

namespace Modular\Cms\Driver\Mysql\Footer;

use Modular\Core\Driver\Mysql\Repository;

/**
 * Class FooterRepository
 *
 * @package \Modular\Cms\Driver\Mysql\Footer
 */
class FooterRepository extends Repository implements \Modular\Cms\Footer\FooterRepositoryInterface
{
    protected $tableName = 'modular_cms_footer';
    protected $columns = [
        'type',
        'code',
    ];

    /**
     * @return array
     */
    public function getData(): array
    {
        if ([] == $this->inMemoryItems) {
            $this->inMemoryItems = $this->convertToItems(
                $this->getSqlBuilder()->get(),
                FooterItem::class
            );
        }

        return $this->inMemoryItems;
    }

}
