<?php

namespace YaPro\MarkerInterfaces\Creational;

/**
 * Строитель — это порождающий паттерн проектирования, который позволяет создавать сложные объекты
 *
 * Паттерн предлагает выносить конструирование объектов в классы-строители, тем самым упрощая классы, в которых
 * созданные объекты будут использоваться.
 *
 * @link https://refactoring.guru/ru/design-patterns/builder
 * @link http://designpatternsphp.readthedocs.io/ru/latest/Creational/Builder/README.html
 */
interface BuilderInterface extends AbstractFactoryInterface
{
    /**
     * Фабричный метод — это порождающий паттерн проектирования, говорящий о том, что данный метод порождает структуру
     *
     * @link https://refactoring.guru/ru/design-patterns/factory-method
     * @link http://designpatternsphp.readthedocs.io/ru/latest/Creational/FactoryMethod/README.html
     *
     * Ни один метод специально не объявлен в интерфейсе, т.к. вариантов передачи параметров, а так же результирующих типов
     * может быть несколько.
     *
     * Тем не менее, для простых строителей, выполняющих одно действие - создание объекта на основе переданных
     * параметров, должен существовать базовый метод "create", например такой:
     *
     * public function format create(array $queryResults)
     */
}
