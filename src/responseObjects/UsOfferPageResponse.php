<?php

namespace Legeartis\UnifiedSearch\responseObjects;

class UsOfferPageResponse extends Base
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var UsOffer[]
     */
    public $data = [];

    protected function getFields()
    {
        return [
            'requestId' => 'string',
            'data' => 'UsOffer[]',
        ];
    }
}