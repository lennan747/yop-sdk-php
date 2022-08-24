<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class AccountBookRefundResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var AccountBookRefundResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new AccountBookRefundResponseUnMarshaller();
    }

    /**
     * @return AccountBookRefundResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return AccountBookRefundResponse
     */
    protected function getResponseInstance()
    {
        return new AccountBookRefundResponse();
    }
}

AccountBookRefundResponseUnMarshaller::__init();
