<?php

namespace App\MessageHandler;

use App\Message\Message;
use Symfony\Component\Messenger\Handler\MessageHandlerInterface;

final class MessageHandler implements MessageHandlerInterface
{
    public function __invoke(Message $message)
    {
        // do something with your message
    }
}
