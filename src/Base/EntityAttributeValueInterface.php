<?php

namespace YaPro\MarkerInterfaces\Base;

/**
 * Entity Attribute Value (EAV) - реализация паттерна заключается в создании объекта, который хранит некоторое кол-во
 * данных (это просто объект с данными), который может включать в себя данные других объектов, например сразу двух
 * Entity (напомню, что Entity - это объект бизнес-логики).
 *
 * http://designpatternsphp.readthedocs.io/ru/latest/More/EAV/README.html
 * https://en.wikipedia.org/wiki/Entity–attribute–value_model
 *
 * ОЧЕНЬ ВАЖНО: данный объект может менять свое состояние, следовательно это очень плохой шаблон и нужно 100 раз
 * подумать и 10 раз согласовать, прежде чем реализовывать его. Убедительным на мой взгляд решением применять данный
 * паттерн, является объект с уникальной идентификацией, например Entity или Model в Active Record.
 */
interface EntityAttributeValueInterface
{
}
