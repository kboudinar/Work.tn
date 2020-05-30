<?php

namespace NotificationBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class NotificationBundle extends Bundle
{
    public function testshow(){
        $client = static::createClient();

        $crawler = $client->request( 'GET','/showfollow');

}
}
