<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BankAccountQueryTradeResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BankAccountQueryTradeResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BankAccountQueryTradeResponseUnMarshaller();
    }

    /**
     * @return BankAccountQueryTradeResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BankAccountQueryTradeResponse
     */
    protected function getResponseInstance()
    {
        return new BankAccountQueryTradeResponse();
    }
}

BankAccountQueryTradeResponseUnMarshaller::__init();
