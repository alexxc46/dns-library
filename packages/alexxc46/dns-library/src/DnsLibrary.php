<?php

namespace Alexx\DnsLibrary;

class DnsLibrary {

    public function getDnsRecords(string $domain): array
    {
        $dns = @dns_get_record($domain, DNS_A);
        if(!$dns){
            return false;
        }

        return $dns;
    }
}