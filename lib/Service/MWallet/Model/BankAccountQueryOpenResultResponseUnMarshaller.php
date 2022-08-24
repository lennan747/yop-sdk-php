<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BankAccountQueryOpenResultResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BankAccountQueryOpenResultResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BankAccountQueryOpenResultResponseUnMarshaller();
    }

    /**
     * @return BankAccountQueryOpenResultResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BankAccountQueryOpenResultResponse
     */
    protected function getResponseInstance()
    {
        return new BankAccountQueryOpenResultResponse();
    }
}

BankAccountQueryOpenResultResponseUnMarshaller::__init();
