<?php

namespace YaPro\MarkerInterfaces\Base;

/**
 * Data Transfer Object - это ValueObject, обязательно содержащий метод(ы) работы с данными, например метод может:
 * - засериализовать данные
 * - десериализовать данные в текущий объект
 * - поднять объект из переданных в него данных (lazy loading)
 *
 * http://design-pattern.ru/patterns/data-transfer-object.html
 * https://www.martinfowler.com/eaaCatalog/dataTransferObject.html
 *
 * ОЧЕНЬ ВАЖНО: данный объект может менять свое состоянеие, следовательно это очень плохой шаблон проектирования и
 * нужно 100 раз подумать и 10 раз согласовать, прежде чем реализовывать его.
 */
interface DataTransferObjectInterface extends ValueObjectInterface {}
