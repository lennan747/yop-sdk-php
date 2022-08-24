<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BankAccountActivationResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BankAccountActivationResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BankAccountActivationResponseUnMarshaller();
    }

    /**
     * @return BankAccountActivationResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BankAccountActivationResponse
     */
    protected function getResponseInstance()
    {
        return new BankAccountActivationResponse();
    }
}

BankAccountActivationResponseUnMarshaller::__init();
