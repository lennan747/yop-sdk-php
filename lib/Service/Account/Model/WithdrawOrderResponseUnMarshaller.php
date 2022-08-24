<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class WithdrawOrderResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var WithdrawOrderResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new WithdrawOrderResponseUnMarshaller();
    }

    /**
     * @return WithdrawOrderResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return WithdrawOrderResponse
     */
    protected function getResponseInstance()
    {
        return new WithdrawOrderResponse();
    }
}

WithdrawOrderResponseUnMarshaller::__init();
