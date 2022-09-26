<?php

namespace YaPro\MarkerInterfaces\Base;

/**
 * Entity - это ValueObject имеющий четкую идентичность (id/guid/etc) проходящую через время и различные представления.
 * Таким образом данные в объекте могут изменяться, но идентичность должна быть неизменяема (иммутабельна).
 * Используется для хранения бизнес-данных и иногда управлением бизнес-логикой над данными.
 * Паттерн представляет собой компонент управления данными бизнес назначения.
 * Обычно используется для реализации маппинга данных (например таблиц в базе данных) на классы сущностей.
 * Обычно используется совместно с http://design-pattern.ru/patterns/identity-map.html
 *
 * @link https://en.wikipedia.org/wiki/Entity_abstraction_pattern
 *
 * Заметка: часто его сравнивают с ActiveRecordModel, но не с DomainModel, которая может состоять из нескольких Entity
 */
interface EntityInterface extends ValueObjectInterface
{
}
