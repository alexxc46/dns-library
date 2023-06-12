<?php

namespace Alexx\DnsLibrary;

class DnsLibrary {

    public function getDnsRecords(string $domain): array
    {
        // return dns_get_record($domain, DNS_ALL);
        $ipAddress = gethostbyname($domain);


        // dummy return statement for testing purposes
        return [
            [
                'type' => 'A',
                'target' => $ipAddress,
            ],
            [
                'type' => 'MX',
                'target' => $ipAddress,
            ],
        ];
    }
}