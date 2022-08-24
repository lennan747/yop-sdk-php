<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BankAccountQueryWithdrawResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BankAccountQueryWithdrawResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BankAccountQueryWithdrawResponseUnMarshaller();
    }

    /**
     * @return BankAccountQueryWithdrawResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BankAccountQueryWithdrawResponse
     */
    protected function getResponseInstance()
    {
        return new BankAccountQueryWithdrawResponse();
    }
}

BankAccountQueryWithdrawResponseUnMarshaller::__init();
