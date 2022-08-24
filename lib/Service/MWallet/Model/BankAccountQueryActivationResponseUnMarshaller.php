<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BankAccountQueryActivationResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BankAccountQueryActivationResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BankAccountQueryActivationResponseUnMarshaller();
    }

    /**
     * @return BankAccountQueryActivationResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BankAccountQueryActivationResponse
     */
    protected function getResponseInstance()
    {
        return new BankAccountQueryActivationResponse();
    }
}

BankAccountQueryActivationResponseUnMarshaller::__init();
