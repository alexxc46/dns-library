<?php

namespace Alexx\DnsLibrary;

use Illuminate\Support\ServiceProvider;

class DnsLibraryServiceProvider extends ServiceProvider {

    public function boot() {

    }

    public function register() {
        $this->app->bind('DnsLibrary', function ($app) {
            return new DnsLibrary();
        });

        $this->app->booting(function () {
            $dnsLibrary = $this->app->make('DnsLibrary');
            $domain = 'github.com';
            $dnsRecords = $dnsLibrary->getDnsRecords($domain);

            $result = [];
            foreach ($dnsRecords as $record) {
                array_push($result, "Type: " . $record['type'] . ", Value: " . $record['target']);
            }

            dd($result);
        });
    }
}