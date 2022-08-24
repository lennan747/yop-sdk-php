<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class RechargeInitiateResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var RechargeInitiateResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new RechargeInitiateResponseUnMarshaller();
    }

    /**
     * @return RechargeInitiateResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return RechargeInitiateResponse
     */
    protected function getResponseInstance()
    {
        return new RechargeInitiateResponse();
    }
}

RechargeInitiateResponseUnMarshaller::__init();
