<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class AccountManageAccountOpenResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var AccountManageAccountOpenResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new AccountManageAccountOpenResponseUnMarshaller();
    }

    /**
     * @return AccountManageAccountOpenResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return AccountManageAccountOpenResponse
     */
    protected function getResponseInstance()
    {
        return new AccountManageAccountOpenResponse();
    }
}

AccountManageAccountOpenResponseUnMarshaller::__init();
