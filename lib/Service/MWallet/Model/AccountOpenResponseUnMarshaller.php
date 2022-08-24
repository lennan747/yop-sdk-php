<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class AccountOpenResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var AccountOpenResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new AccountOpenResponseUnMarshaller();
    }

    /**
     * @return AccountOpenResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return AccountOpenResponse
     */
    protected function getResponseInstance()
    {
        return new AccountOpenResponse();
    }
}

AccountOpenResponseUnMarshaller::__init();
