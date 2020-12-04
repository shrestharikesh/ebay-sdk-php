<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Marketing\Types;

use DTS\eBaySDK\Marketing\Types\CreateAdsByInventoryReferenceRestRequest;

class CreateAdsByInventoryReferenceRestRequestTest extends \PHPUnit\Framework\TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new CreateAdsByInventoryReferenceRestRequest();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Marketing\Types\CreateAdsByInventoryReferenceRestRequest', $this->obj);
    }

    public function testExtendsCreateAdsByInventoryReferenceRequest()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Marketing\Types\CreateAdsByInventoryReferenceRequest', $this->obj);
    }
}