<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class AccountManageBankAccountOpenResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var AccountManageBankAccountOpenResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new AccountManageBankAccountOpenResponseUnMarshaller();
    }

    /**
     * @return AccountManageBankAccountOpenResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return AccountManageBankAccountOpenResponse
     */
    protected function getResponseInstance()
    {
        return new AccountManageBankAccountOpenResponse();
    }
}

AccountManageBankAccountOpenResponseUnMarshaller::__init();
