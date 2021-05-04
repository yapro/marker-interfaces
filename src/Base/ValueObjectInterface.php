<?php

namespace YaPro\MarkerInterfaces\Base;

/**
 * Value Object - это имутабельный/неизменяемый объект (это значит, что данные в этом объекте инициализируются один
 * раз - в момент создания объекта и более не меняются).
 * https://martinfowler.com/bliki/ValueObject.html.
 * https://docs.microsoft.com/ru-ru/dotnet/architecture/microservices/microservice-ddd-cqrs-patterns/implement-value-objects.
 */
interface ValueObjectInterface extends EntityAttributeValueInterface
{
}
