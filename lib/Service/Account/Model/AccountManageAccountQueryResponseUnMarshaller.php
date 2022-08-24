<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class AccountManageAccountQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var AccountManageAccountQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new AccountManageAccountQueryResponseUnMarshaller();
    }

    /**
     * @return AccountManageAccountQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return AccountManageAccountQueryResponse
     */
    protected function getResponseInstance()
    {
        return new AccountManageAccountQueryResponse();
    }
}

AccountManageAccountQueryResponseUnMarshaller::__init();
