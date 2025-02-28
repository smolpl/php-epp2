<?php

namespace AfriCC\Tests\EPP\Extension\NASK\Report;

use AfriCC\EPP\Extension\NASK\ObjectSpec as NASKObjectSpec;
use AfriCC\EPP\Extension\NASK\Report\Future as Report;
use PHPUnit\Framework\TestCase;

class ReportFutureTest extends TestCase
{
    public function testReportFutureFrame()
    {
        $frame = new Report(new NASKObjectSpec());

        $this->assertXmlStringEqualsXmlString(
            '<?xml version="1.0" encoding="UTF-8" standalone="no"?>
            <epp xmlns="http://www.dns.pl/nask-epp-schema/epp-2.1">
              <extension>
                <extreport:report xmlns:extreport="http://www.dns.pl/nask-epp-schema/extreport-2.1">
                  <extreport:future />
                </extreport:report>
              </extension>
            </epp>
            ',
            (string) $frame
            );
    }

    public function testReportSpecificFutureFrame()
    {
        $frame = new Report(new NASKObjectSpec());
        $frame->setExDate('2007-04-23T15:22:34.0Z');

        $this->assertXmlStringEqualsXmlString(
            '<?xml version="1.0" encoding="UTF-8" standalone="no"?>
            <epp xmlns="http://www.dns.pl/nask-epp-schema/epp-2.1">
              <extension>
                <extreport:report xmlns:extreport="http://www.dns.pl/nask-epp-schema/extreport-2.1">
                  <extreport:future>
                    <extreport:exDate>2007-04-23T15:22:34.0Z</extreport:exDate>
                  </extreport:future>
                </extreport:report>
              </extension>
            </epp>
            ',
            (string) $frame
            );
    }
}
