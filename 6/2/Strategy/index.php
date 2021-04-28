<?php

namespace Strategy;

use Strategy\Comparator\CreatedAtComparator;
use Strategy\Comparator\IdComparator;
use Strategy\Comparator\SumComparator;
use Strategy\Entity\Order;
use Strategy\Service\OrderSorter;

spl_autoload_register(function ($className) {
    $className = str_replace("\\", DIRECTORY_SEPARATOR, $className);
    $className = preg_replace('/^Strategy/', '', $className);
    require_once __DIR__ . $className . '.php';
});

// Создаем заказы руками, в реальности мы будем эти заказы брать из БД.
$orders = [
    new Order(1, 500, new \DateTime('2010-01-01')),
    new Order(5, 1000, new \DateTime('2011-01-01')),
    new Order(4, 15.55, new \DateTime('2015-01-01')),
    new Order(3, 133, new \DateTime('2013-01-01')),
    new Order(2, 582, new \DateTime('2019-01-01')),
];

//
/**
 * Функция для вывода в консоль наших заказов (для удобства вывода).
 * @param Order[] $orders
 */
function renderOrders(array $orders)
{
    foreach ($orders as $order) {
        echo "id: {$order->getId()}\tsum: {$order->getSum()}" .
            "\tcreated at: {$order->getCreatedAt()->format('Y-m-d')}\n";
    }
}

$pays = [
    new Pay(1, 1500, 79148995955, "Qiwi"),
    new Pay(2, 148.55, 79458594909, "Yandex"),
    new Pay(3, 715, 79785894327, "WebMoney")
];

function renderPay(array $pays) {
    foreach ($pays as $pay) {
        echo "id: {$pay->getId()}\tsum: {$pay->getSum()}\t{$pay->getNumber()}\tpay{$pay->getPay()}";
    }
}
