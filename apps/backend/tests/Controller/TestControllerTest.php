<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

uses(WebTestCase::class)->group('Functional');

test('La route de test fonctionne correctement', function () {
    $client = static::createClient();
    $client->request('GET', '/test');

    expect($client->getResponse()->isSuccessful())
        ->toBeTrue()
        ->and($client->getResponse()->getStatusCode())
        ->toBe(200)
        ->and($client->getResponse()->getContent())
        ->toContain('Installation Symfony fonctionnelle !');
});
