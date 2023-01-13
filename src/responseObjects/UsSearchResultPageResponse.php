<?php

namespace Legeartis\UnifiedSearch\responseObjects;

class UsSearchResultPageResponse extends Base
{
    /**
     * @var UsSearchDetail[]
     */
    public $data;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var UsParsedRequest
     */
    public $parsedRequest;

    /**
     * @var integer
     */
    public $pageNumber;

    /**
     * @var integer
     */
    public $pageSize;

    /**
     * @var integer
     */
    public $totalPages;

    /**
     * @var integer
     */
    public $totalElements;

    protected function getFields()
    {
        return [
            'data' => 'UsSearchDetail[]',
            'requestId' => 'string',
            'parsedRequest' => 'UsParsedRequest',
            'pageNumber' => 'integer',
            'pageSize' => 'integer',
            'totalPages' => 'integer',
            'totalElements' => 'integer',
        ];
    }
}