<?php

namespace App\MessageHandler;

use App\Message\SmsNotification;
use Symfony\Component\Messenger\Handler\MessageHandlerInterface;

class SmsNotificationHandler implements MessageHandlerInterface
{
    public function __invoke(SmsNotification $message)
    {
        for ($i=0; $i<5; $i++) {
            echo $i.'-Merhaba '.$message->getContent()."\n";
            sleep(1);
        }

    }
}