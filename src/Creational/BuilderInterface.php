<?php

namespace YaPro\MarkerInterfaces\Creational;

interface BuilderInterface extends AbstractFactoryInterface
{
    /**
     * Ни один метод специально не объявлен в интерфейсе, т.к. вариантов передачи параметров, а так же результирующих типов
     * может быть несколько.
     *
     * Тем не менее, для простых строителей, выполняющих одно действие - создание объекта на основе переданных параметров -
     * должен существовать базовый метод "create", например такой:
     *
     * public function format create(array $queryResults)
     */
}
