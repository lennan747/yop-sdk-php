<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BankAccountWithdrawResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BankAccountWithdrawResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BankAccountWithdrawResponseUnMarshaller();
    }

    /**
     * @return BankAccountWithdrawResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BankAccountWithdrawResponse
     */
    protected function getResponseInstance()
    {
        return new BankAccountWithdrawResponse();
    }
}

BankAccountWithdrawResponseUnMarshaller::__init();
