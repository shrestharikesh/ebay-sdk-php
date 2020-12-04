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

use DTS\eBaySDK\PostOrder\Types\IssueInquiryRefundRestResponse;

class IssueInquiryRefundRestResponseTest extends \PHPUnit\Framework\TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new IssueInquiryRefundRestResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\PostOrder\Types\IssueInquiryRefundRestResponse', $this->obj);
    }

    public function testExtendsVoluntaryRefundResponse()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\PostOrder\Types\VoluntaryRefundResponse', $this->obj);
    }
}