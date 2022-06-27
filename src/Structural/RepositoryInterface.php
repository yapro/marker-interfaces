<?php

namespace YaPro\MarkerInterfaces\Structural;

/**
 * https://designpatternsphp.readthedocs.io/ru/latest/More/Repository/README.html
 * @link https://msdn.microsoft.com/en-us/library/ff649690.aspx
 */
interface RepositoryInterface
{
    // public function __construct(PersistenceInterface $persistence);

    /**
     * @param int $id
     * @return EntityInterface
     */
    // public function findById($id);

    /**
     * @param EntityInterface $post
     * @return void
     */
    // public function save(EntityInterface $post);
}
