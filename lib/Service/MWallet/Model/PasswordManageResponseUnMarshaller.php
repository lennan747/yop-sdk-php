<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class PasswordManageResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var PasswordManageResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new PasswordManageResponseUnMarshaller();
    }

    /**
     * @return PasswordManageResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return PasswordManageResponse
     */
    protected function getResponseInstance()
    {
        return new PasswordManageResponse();
    }
}

PasswordManageResponseUnMarshaller::__init();
