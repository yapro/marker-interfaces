<?php

namespace YaPro\MarkerInterfaces\Structural;

/**
 * https://designpatternsphp.readthedocs.io/ru/latest/More/Repository/README.html
 */
interface RepositoryInterface extends DataSourceProviderInterface
{
    /**
     * @param array $data
     * @return int
     */
    // public function persist(array $data);

    /**
     * @param int $id
     * @return array
     */
    // public function retrieve($id);

    /**
     * @param int $id
     * @return mixed
     */
    // public function delete($id);
}
