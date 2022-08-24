<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class RechargeAccountBookQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var RechargeAccountBookQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new RechargeAccountBookQueryResponseUnMarshaller();
    }

    /**
     * @return RechargeAccountBookQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return RechargeAccountBookQueryResponse
     */
    protected function getResponseInstance()
    {
        return new RechargeAccountBookQueryResponse();
    }
}

RechargeAccountBookQueryResponseUnMarshaller::__init();
