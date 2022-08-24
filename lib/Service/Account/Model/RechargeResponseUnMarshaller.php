<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class RechargeResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var RechargeResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new RechargeResponseUnMarshaller();
    }

    /**
     * @return RechargeResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return RechargeResponse
     */
    protected function getResponseInstance()
    {
        return new RechargeResponse();
    }
}

RechargeResponseUnMarshaller::__init();
