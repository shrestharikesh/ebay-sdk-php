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

use DTS\eBaySDK\PostOrder\Types\AddShippingLabelInfoRestRequest;

class AddShippingLabelInfoRestRequestTest extends \PHPUnit\Framework\TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new AddShippingLabelInfoRestRequest();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\PostOrder\Types\AddShippingLabelInfoRestRequest', $this->obj);
    }

    public function testExtendsProvideLabelRequest()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\PostOrder\Types\ProvideLabelRequest', $this->obj);
    }
}