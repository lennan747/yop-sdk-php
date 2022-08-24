<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class RechargeQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var RechargeQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new RechargeQueryResponseUnMarshaller();
    }

    /**
     * @return RechargeQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return RechargeQueryResponse
     */
    protected function getResponseInstance()
    {
        return new RechargeQueryResponse();
    }
}

RechargeQueryResponseUnMarshaller::__init();
