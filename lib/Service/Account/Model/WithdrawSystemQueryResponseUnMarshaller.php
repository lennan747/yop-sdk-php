<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class WithdrawSystemQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var WithdrawSystemQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new WithdrawSystemQueryResponseUnMarshaller();
    }

    /**
     * @return WithdrawSystemQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return WithdrawSystemQueryResponse
     */
    protected function getResponseInstance()
    {
        return new WithdrawSystemQueryResponse();
    }
}

WithdrawSystemQueryResponseUnMarshaller::__init();
