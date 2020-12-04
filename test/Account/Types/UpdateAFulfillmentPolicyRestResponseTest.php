<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Account\Types;

use DTS\eBaySDK\Account\Types\UpdateAFulfillmentPolicyRestResponse;

class UpdateAFulfillmentPolicyRestResponseTest extends \PHPUnit\Framework\TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new UpdateAFulfillmentPolicyRestResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Account\Types\UpdateAFulfillmentPolicyRestResponse', $this->obj);
    }

    public function testExtendsSetFulfillmentPolicyResponse()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Account\Types\SetFulfillmentPolicyResponse', $this->obj);
    }
}