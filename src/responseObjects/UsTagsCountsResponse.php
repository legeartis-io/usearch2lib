<?php

namespace Legeartis\UnifiedSearch\responseObjects;

class UsTagsCountsResponse extends Base
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var UsTagCount
     */
    public $data;

    protected function getFields()
    {
        return [
            'requestId' => 'string',
            'data' => 'UsTagCount',
        ];
    }
}