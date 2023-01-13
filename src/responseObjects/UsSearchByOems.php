<?php

namespace Legeartis\UnifiedSearch\responseObjects;

class UsSearchByOems extends Base
{
    /**
     * @var string
     */
    public $oem;

    /**
     * @var UsSearchDetail[]
     */
    public $details;

    protected function getFields()
    {
        return [
            'oem' => 'string',
            'details' => 'UsSearchDetail[]',
        ];
    }
}