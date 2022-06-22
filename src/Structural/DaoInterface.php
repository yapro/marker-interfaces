<?php

namespace YaPro\MarkerInterfaces\Structural;

/**
 * Data Access Object - предоставляет абстрактный интерфейс к какому-либо типу базы данных или механизму хранения.
 * @link http://java-course.ru/student/book2/scheme/
 * @link https://ru.wikipedia.org/wiki/Data_Access_Object
 */
interface DaoInterface extends DataSourceProviderInterface
{
    /**
     * @param int $id
     * @return object
     */
    public function get($id);

    /**
     * @param object $entity
     * @return bool
     */
    public function create($entity);


    /**
     * @param object $entity
     * @return bool
     */
    public function update($entity);

    /**
     * @param int $id
     * @return bool
     */
    public function delete($id);
}
