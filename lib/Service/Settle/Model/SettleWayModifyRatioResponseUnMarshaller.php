<?php


namespace Yeepay\Yop\Sdk\Service\Settle\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class SettleWayModifyRatioResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var SettleWayModifyRatioResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new SettleWayModifyRatioResponseUnMarshaller();
    }

    /**
     * @return SettleWayModifyRatioResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return SettleWayModifyRatioResponse
     */
    protected function getResponseInstance()
    {
        return new SettleWayModifyRatioResponse();
    }
}

SettleWayModifyRatioResponseUnMarshaller::__init();
