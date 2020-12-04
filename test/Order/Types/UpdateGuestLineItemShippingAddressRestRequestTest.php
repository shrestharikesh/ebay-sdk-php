<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Order\Types;

use DTS\eBaySDK\Order\Types\UpdateGuestLineItemShippingAddressRestRequest;

class UpdateGuestLineItemShippingAddressRestRequestTest extends \PHPUnit\Framework\TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new UpdateGuestLineItemShippingAddressRestRequest();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Order\Types\UpdateGuestLineItemShippingAddressRestRequest', $this->obj);
    }

    public function testExtendsShippingAddressImpl()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Order\Types\ShippingAddressImpl', $this->obj);
    }
}