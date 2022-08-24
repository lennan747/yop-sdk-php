<?php


namespace Yeepay\Yop\Sdk\Service\Invoice\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class RecordQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var RecordQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new RecordQueryResponseUnMarshaller();
    }

    /**
     * @return RecordQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return RecordQueryResponse
     */
    protected function getResponseInstance()
    {
        return new RecordQueryResponse();
    }
}

RecordQueryResponseUnMarshaller::__init();
