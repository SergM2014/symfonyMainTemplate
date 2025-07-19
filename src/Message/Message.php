<?php

namespace App\Message;

final class Message
{
    /*
     * Add whatever properties and methods you need
     * to hold the data for this message class.
     */

   

    public function __construct(private string $content) {}

   public function getcontent(): string
   {
       return $this->content;
   }
}
