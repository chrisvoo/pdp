<?php

namespace Pdp\Creational\FactoryMethod;

use Exception;

/**
 * User: Junade Ali
 * Date: 13/03/2016
 * Time: 13:55
 */
class CourierNotifierFactory implements NotifierFactory
{
    public static function getNotifier($notifier, $to)
    {
        if (empty($notifier)) {
            throw new Exception("No notifier passed.");
        }

        switch ($notifier) {
            case 'Post':
                return new Post($to);
            default:
                throw new Exception("Notifier invalid.");
        }
    }
}