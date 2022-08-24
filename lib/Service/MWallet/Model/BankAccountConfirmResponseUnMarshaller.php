<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BankAccountConfirmResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BankAccountConfirmResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BankAccountConfirmResponseUnMarshaller();
    }

    /**
     * @return BankAccountConfirmResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BankAccountConfirmResponse
     */
    protected function getResponseInstance()
    {
        return new BankAccountConfirmResponse();
    }
}

BankAccountConfirmResponseUnMarshaller::__init();
