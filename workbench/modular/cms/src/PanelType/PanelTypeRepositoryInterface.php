<?php

namespace Modular\Cms\PanelType;

use Modular\Core\Driver\Mysql\RepositoryInterface;

interface PanelTypeRepositoryInterface extends RepositoryInterface
{
    /**
     * @return array
     */
    public function getAll(): array;

    /**
     * @param string $group
     *
     * @return array
     */
    public function getByGroup(string $group): array;

    /**
     * @param array $groups
     *
     * @return array
     */
    public function getByGroups(array $groups): array;
}
