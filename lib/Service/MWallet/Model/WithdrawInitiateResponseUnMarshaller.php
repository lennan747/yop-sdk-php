<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class WithdrawInitiateResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var WithdrawInitiateResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new WithdrawInitiateResponseUnMarshaller();
    }

    /**
     * @return WithdrawInitiateResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return WithdrawInitiateResponse
     */
    protected function getResponseInstance()
    {
        return new WithdrawInitiateResponse();
    }
}

WithdrawInitiateResponseUnMarshaller::__init();
