<?php

namespace Reliv\Json;

use Reliv\Json\Api\JsonDecode;
use Reliv\Json\Api\JsonDecodeBasicFactory;
use Reliv\Json\Api\JsonEncode;
use Reliv\Json\Api\JsonEncodeBasicFactory;

/**
 * @author James Jervis - https://github.com/jerv13
 */
class ModuleConfig
{
    /**
     * @return array
     */
    public function __invoke()
    {
        return [
            'dependencies' => [
                'config_factories' => [
                    JsonDecode::class => [
                        'factory' => JsonDecodeBasicFactory::class,
                    ],
                    JsonEncode::class => [
                        'factory' => JsonEncodeBasicFactory::class,
                    ],
                ],
            ],
        ];
    }
}
