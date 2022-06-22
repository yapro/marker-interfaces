<?php

namespace YaPro\MarkerInterfaces\Creational;

/**
 * Abstract Factory - класс с методами, которые порождают объекты.
 *
 * @see http://designpatternsphp.readthedocs.io/ru/latest/Creational/AbstractFactory/README.html
 */
interface AbstractFactoryInterface
{
    /*
     * Ни один метод специально не объявлен в интерфейсе, т.к. вариантов передачи параметров, а так же результирующих
     * типов может быть несколько.
     *
     * Тем не менее, для простых строителей, выполняющих одно действие - создание объекта на основе переданных
     * параметров - должен существовать базовый метод "create", например такой:
     *
     * public function create(array $queryResults)
     */
}
