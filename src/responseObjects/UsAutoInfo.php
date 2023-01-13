<?php

namespace Legeartis\UnifiedSearch\responseObjects;

use DateTime;

class UsAutoInfo extends Base
{

    public const PROCESSING_STAGE_IDENTIFIED = 'identified';
    public const PROCESSING_STAGE_OEMS_RESOLVED = 'oemsResolved';
    public const PROCESSING_STAGE_DETAILS_RESOLVED = 'detailsResolved';
    public const PROCESSING_STAGE_CROSSES_RESOLVED = 'crossesResolved';
    public const PROCESSING_STAGE_INDEXED = 'indexed';

    public const STATE_CREATED = "created";
    public const STATE_QUEUED = "queued";
    public const STATE_PROCESSING = "processing";
    public const STATE_FAILED = "failed";
    public const STATE_SUCCESS = "success";
    public const STATE_ABORTED = "aborted";

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
     * @var UsAttribute[]
     */
    public $attributes;

    /**
     * @var string
     */
    public $identString;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $processingStage;

    /**
     * @var DateTime
     */
    public $createdTime;

    /**
     * @var DateTime
     */
    public $updatedTime;

    /**
     * @var string
     */
    public $error;

    protected function getFields()
    {
        return [
            'id' => 'int',
            'brand' => 'string',
            'name' => 'string',
            'attributes' => 'UsAttribute[]',
            'identString' => 'string',
            'state' => 'string',
            'processingStage' => 'string',
            'createdTime' => 'DateTime',
            'updatedTime' => 'DateTime',
            'error' => 'string',
        ];
    }
}