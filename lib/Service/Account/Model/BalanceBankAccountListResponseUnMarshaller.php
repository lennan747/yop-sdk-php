<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BalanceBankAccountListResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BalanceBankAccountListResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BalanceBankAccountListResponseUnMarshaller();
    }

    /**
     * @return BalanceBankAccountListResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BalanceBankAccountListResponse
     */
    protected function getResponseInstance()
    {
        return new BalanceBankAccountListResponse();
    }
}

BalanceBankAccountListResponseUnMarshaller::__init();
