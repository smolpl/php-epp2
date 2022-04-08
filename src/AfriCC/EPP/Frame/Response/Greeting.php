<?php

/**
 * This file is part of the php-epp2 library.
 *
 * (c) Gunter Grodotzki <gunter@afri.cc>
 *
 * For the full copyright and license information, please view the LICENSE file
 * that was distributed with this source code.
 */

namespace AfriCC\EPP\Frame\Response;

use AfriCC\EPP\AbstractFrame;
use AfriCC\EPP\DOM\DOMTools;

class Greeting extends AbstractFrame
{
    public function serverId(): ?string
    {
        return $this->get('//epp:epp/epp:greeting/epp:svID/text()');
    }

    public function serverDate(): ?string
    {
        return $this->get('//epp:epp/epp:greeting/epp:svDate/text()');
    }

    public function menu(): array
    {
        $node = $this->get('//epp:epp/epp:greeting/epp:svcMenu')->item(0);

        return DOMTools::nodeToArray($node, ['version', 'lang', 'objURI']);
    }
}
