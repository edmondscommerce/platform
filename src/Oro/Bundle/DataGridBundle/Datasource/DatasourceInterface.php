<?php

namespace Oro\Bundle\DataGridBundle\Datasource;

use Oro\Bundle\DataGridBundle\Datagrid\DatagridInterface;

/**
 * Class DatasourceInterface
 * @package Oro\Bundle\DataGridBundle\Datasource
 */
interface DatasourceInterface
{
    const SOURCE_KEY = 'source';
    const TYPE_KEY   = 'type';

    /**
     * Accept source to datagrid
     *
     * @param DatagridInterface $grid
     * @param array             $config
     */
    public function process(DatagridInterface $grid, array $config);

    /**
     * @return array
     */
    public function getResults();
}
