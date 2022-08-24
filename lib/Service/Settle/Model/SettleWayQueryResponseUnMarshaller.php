<?php


namespace Yeepay\Yop\Sdk\Service\Settle\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class SettleWayQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var SettleWayQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new SettleWayQueryResponseUnMarshaller();
    }

    /**
     * @return SettleWayQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return SettleWayQueryResponse
     */
    protected function getResponseInstance()
    {
        return new SettleWayQueryResponse();
    }
}

SettleWayQueryResponseUnMarshaller::__init();
