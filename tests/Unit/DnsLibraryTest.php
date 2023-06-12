<?php

namespace Tests\Unit;

use Alexx\DnsLibrary\DnsLibrary;
use PHPUnit\Framework\TestCase;

class DnsLibraryTest extends TestCase
{
    /**
     * Test getDnsRecords method.
     *
     * @return void
     */
    public function testGetDnsRecords()
    {
        $dnsLibrary = new DnsLibrary();

        // Test with a valid domain
        $domain = 'github.com';
        $dnsRecords = $dnsLibrary->getDnsRecords($domain);

        // Assert that the returned records are of the expected format
        $this->assertIsArray($dnsRecords);
        $this->assertNotEmpty($dnsRecords);
        $this->assertArrayHasKey('type', $dnsRecords[0]);
        $this->assertArrayHasKey('target', $dnsRecords[0]);

        // Test with an invalid domain
        $invalidDomain = 'example.invalid';
        $dnsRecords = $dnsLibrary->getDnsRecords($invalidDomain);

        // Assert that the returned records are empty for an invalid domain
        $this->assertIsArray($dnsRecords);
        $this->assertEmpty($dnsRecords);
    }
}
