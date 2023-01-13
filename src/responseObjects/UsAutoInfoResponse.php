<?php

namespace Legeartis\UnifiedSearch\responseObjects;

class UsAutoInfoResponse extends Base
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var UsAutoInfo
     */
    public $data;

    protected function getFields()
    {
        return [
            'requestId' => 'string',
            'data' => 'UsAutoInfo',
        ];
    }
}