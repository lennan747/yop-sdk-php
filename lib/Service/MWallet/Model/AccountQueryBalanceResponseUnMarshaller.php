<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class AccountQueryBalanceResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var AccountQueryBalanceResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new AccountQueryBalanceResponseUnMarshaller();
    }

    /**
     * @return AccountQueryBalanceResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return AccountQueryBalanceResponse
     */
    protected function getResponseInstance()
    {
        return new AccountQueryBalanceResponse();
    }
}

AccountQueryBalanceResponseUnMarshaller::__init();
