<?php

/*
 * This file is part of Snipplr PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Snipplr;

use BrianFaust\Unified\AbstractHttpClient;
use BrianFaust\Snipplr\Request\Modifiers\ApiKeyModifier;

class HttpClient extends AbstractHttpClient
{
    protected $options = [
        'base_url' => 'http://snipplr.com/xml-rpc.php',
        'headers' => [
           'User-Agent' => 'BrianFaust/Snipplr',
        ],
    ];

    protected $requestModifiers = [ApiKeyModifier::class];
}
