<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\PostOrder\Types;

use DTS\eBaySDK\PostOrder\Types\CreateReturnRequestRestResponse;

class CreateReturnRequestRestResponseTest extends \PHPUnit\Framework\TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new CreateReturnRequestRestResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\PostOrder\Types\CreateReturnRequestRestResponse', $this->obj);
    }

    public function testExtendsCreateReturnResponse()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\PostOrder\Types\CreateReturnResponse', $this->obj);
    }
}