<?php

namespace YaPro\MarkerInterfaces\Creational;

/**
 * Класс имплементирующий данный интерфейс, должен содержать только один публичный метод format(), но может иметь
 * любое количество приватных методов.
 * 
 * Псевдонимы: Converter, Translator
 */
interface FormatterInterface
{
    /*
     * метод специально не объявлен в интерфейсе, т.к. вариантов передачи в него параметров,
     * может быть очень много, например:
     *
     * public function format(string $ordersNumbers): array;
     * public function format(string $foo, array $bar): \stdClass;
     * public function format(\stdClass $foo, \stdClass $bar = null): string;
     *
     * пример метода форматирующего список номеров заказов в строку:
     * public function format(array $ordersNumbers)
     * {
     *     return implode(', ', $ordersNumbers);
     * }
     *
     * ОЧЕНЬ ВАЖНО: форматер не ходит наружу, он работает с уже подготовленными данными, например в него передаются:
     * - скалярные значения
     * - массивы
     * - объекты с данными (например Entity, EAV, Dto, Vo)
     * - модели данных (но будьте осторожны, иногда модели в некоторых методах ходят за данными в базу и в сервисы)
     */
}
