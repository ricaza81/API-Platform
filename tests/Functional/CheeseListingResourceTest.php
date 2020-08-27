<?php

namespace App\Tests\Functional;

use App\ApiPlatform\Test\ApiTestCase;

class CheeseListingResourceTest extends ApiTestCase
{
    public function testCreateCheeseListing()
    {
        $client = self::createClient();

        $client->request('POST', '/api/cheeses');
        $this->assertResponseStatusCodeSame(401);
    }
}