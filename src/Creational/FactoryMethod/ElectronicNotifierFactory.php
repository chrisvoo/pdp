<?php

namespace Pdp\Creational\FactoryMethod;
use Exception;

/**
 * User: Junade Ali
 * Date: 13/03/2016
 * Time: 13:55
 */
class ElectronicNotifierFactory implements NotifierFactory
{
    public static function getNotifier($notifier, $to)
    {

        if (empty($notifier)) {
            throw new Exception("No notifier passed.");
        }

        switch ($notifier) {
            case 'SMS':
                return new SMS($to);
            case 'Email':
                return new Email($to, 'Junade');
            default:
                throw new Exception("Notifier invalid.");
        }
    }
}