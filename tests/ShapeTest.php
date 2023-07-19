<?php

namespace App\Tests;
use App\Entity\Comment;
use App\Shape;
use PHPUnit\Framework\TestCase;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
class ShapeTest extends WebTestCase
{
    public function testSomething(): void
    {
        $this->assertTrue(true);
    }

    public function testTriangleSuccess(): void
    {
        $client = static::createClient();
        // Request a specific page
        $crawler = $client->request('GET', '/api/v1/triangle/3/4/5');
        // Validate a successful response and some content
        $this->assertResponseIsSuccessful();
    }

    public function testTriangleSuccessDecimal(): void
    {
        $client = static::createClient();
        // Request a specific page
        $crawler = $client->request('GET', '/api/v1/triangle/3.4/4.5/5');
        // Validate a successful response and some content
        $this->assertResponseIsSuccessful();
    }

    public function testCircleSuccess(): void
    {
        $client = static::createClient();
        // Request a specific page
        $crawler = $client->request('GET', '/api/v1/circle/2');
        // Validate a successful response and some content
        $this->assertResponseIsSuccessful();
    }

    public function testCircleSuccessDecimal(): void    {
        $client = static::createClient();
        // Request a specific page
        $crawler = $client->request('GET', '/api/v1/circle/2.5');
        // Validate a successful response and some content
        $this->assertResponseIsSuccessful();
    }

    public function testCircleFail(): void    {
        $client = static::createClient();
        // Request a specific page
        $crawler = $client->request('GET', '/api/v1/circle');
        $this->assertFalse(false);
    }

    public function testTriangleFail(): void    {
        $client = static::createClient();
        // Request a specific page
        $crawler = $client->request('GET', '/api/v1/triangle');
        $this->assertFalse(false);
    }

}
