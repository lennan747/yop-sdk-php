<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BankAccountOpenResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BankAccountOpenResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BankAccountOpenResponseUnMarshaller();
    }

    /**
     * @return BankAccountOpenResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BankAccountOpenResponse
     */
    protected function getResponseInstance()
    {
        return new BankAccountOpenResponse();
    }
}

BankAccountOpenResponseUnMarshaller::__init();
