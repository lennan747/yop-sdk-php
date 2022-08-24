<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class AccountManageBankAccountQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var AccountManageBankAccountQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new AccountManageBankAccountQueryResponseUnMarshaller();
    }

    /**
     * @return AccountManageBankAccountQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return AccountManageBankAccountQueryResponse
     */
    protected function getResponseInstance()
    {
        return new AccountManageBankAccountQueryResponse();
    }
}

AccountManageBankAccountQueryResponseUnMarshaller::__init();
