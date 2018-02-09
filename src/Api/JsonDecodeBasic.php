<?php

namespace Reliv\Json\Api;

use Reliv\Json\Json;
use Reliv\Json\JsonError;

/**
 * @author James Jervis - https://github.com/jerv13
 */
class JsonDecodeBasic implements JsonDecode
{
    /**
     * @param string $json
     * @param bool   $assoc
     * @param int    $depth
     * @param int    $options
     * @param string $context
     *
     * @return mixed
     * @throws JsonError
     */
    public function __invoke(
        string $json,
        bool $assoc = true,
        int $depth = 512,
        int $options = 0,
        string $context = ''
    ) {
        return Json::decode(
            $json,
            $assoc,
            $depth,
            $options,
            $context
        );
    }
}
