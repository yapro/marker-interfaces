<?php

namespace YaPro\MarkerInterfaces\Structural;

/**
 * Persistence обязывает к реализации базовых методов работы с данными.
 */
interface PersistenceInterface extends DataSourceProviderInterface
{
    // public function generateId(): int;

    /**
     * @param array $data
     * @return int
     */
    // public function persist(array $data);

    /**
     * @param int $id
     * @return array
     */
    // public function retrieve($id): array;

    /**
     * @param int $id
     * @return mixed
     */
    // public function delete($id);
}
