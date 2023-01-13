<?php

namespace Legeartis\UnifiedSearch\responseObjects;

class UsVehicle extends Base
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $brand;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $state;

    /**
     * @var UsAttribute[]
     */
    public $attributes = [];

    protected function getFields()
    {
        return [
            'id' => 'int',
            'brand' => 'string',
            'name' => 'string',
            'state' => 'string',
            'attributes' => 'UsAttribute[]',
        ];
    }
}