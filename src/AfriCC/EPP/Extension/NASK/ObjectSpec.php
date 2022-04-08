<?php

namespace AfriCC\EPP\Extension\NASK;

use AfriCC\EPP\ObjectSpec as MainObjectSpec;

class ObjectSpec extends MainObjectSpec
{
    public $specs = [
        'epp' => [
            'xmlns' => 'http://www.dns.pl/nask-epp-schema/epp-2.1',
        ],
        'domain' => [
            'xmlns' => 'http://www.dns.pl/nask-epp-schema/domain-2.1',
        ],
        'host' => [
            'xmlns' => 'http://www.dns.pl/nask-epp-schema/host-2.1',
        ],
        'contact' => [
            'xmlns' => 'http://www.dns.pl/nask-epp-schema/contact-2.1',
        ],
        'future' => [
            'xmlns' => 'http://www.dns.pl/nask-epp-schema/future-2.1',
        ],
        'secDNS' => [
            'xmlns' => 'http://www.dns.pl/nask-epp-schema/secDNS-2.1',
        ],

    ];

    public $services = [
        'http://www.dns.pl/nask-epp-schema/contact-2.1',
        'http://www.dns.pl/nask-epp-schema/host-2.1',
        'http://www.dns.pl/nask-epp-schema/domain-2.1',
        'http://www.dns.pl/nask-epp-schema/future-2.1',
    ];

    public $serviceExtensions = [
        'http://www.dns.pl/nask-epp-schema/extcon-2.1',
        'http://www.dns.pl/nask-epp-schema/extdom-2.1',
        'http://www.dns.pl/nask-epp-schema/secDNS-2.1',
    ];
}
