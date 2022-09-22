<?php

namespace Pdp\SimpleFactory;

use Exception;

class NotifierFactory
{
    /**
     * @param $notifier
     * @param $to
     * @return Email|SMS
     * @throws Exception
     */
    public static function getNotifier($notifier, $to): Notifier
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