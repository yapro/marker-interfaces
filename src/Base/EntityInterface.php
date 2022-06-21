<?php

namespace YaPro\MarkerInterfaces\Base;

/**
 * Entity - это ValueObject, для хранения бизнес-данных и иногда управлением бизнес-логикой над данными.
 * Паттерн представляет собой компонент управления данными бизнес назначения.
 * Обычно используется для реализации маппинга данных (например таблиц в базе данных) на классы сущностей.
 * Обычно используется совместно с http://design-pattern.ru/patterns/identity-map.html
 *
 * @link https://en.wikipedia.org/wiki/Entity_abstraction_pattern
 *
 * ОЧЕНЬ ВАЖНО: данный объект может менять свое состояние, следовательно это очень плохой шаблон и нужно 100 раз
 * подумать и 10 раз согласовать, прежде чем реализовывать его.
 *
 * Заметка: часто его сравнивают с ActiveRecordModel, но не с DomainModel, которая может состоять из нескольких Entity
 */
interface EntityInterface extends ValueObjectInterface
{

}
