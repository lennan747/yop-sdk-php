<?php


namespace Yeepay\Yop\Sdk\Service\Invoice\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class FeeQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var FeeQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new FeeQueryResponseUnMarshaller();
    }

    /**
     * @return FeeQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return FeeQueryResponse
     */
    protected function getResponseInstance()
    {
        return new FeeQueryResponse();
    }
}

FeeQueryResponseUnMarshaller::__init();
