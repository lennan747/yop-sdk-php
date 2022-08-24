<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class AccountBookQueryRefundResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var AccountBookQueryRefundResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new AccountBookQueryRefundResponseUnMarshaller();
    }

    /**
     * @return AccountBookQueryRefundResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return AccountBookQueryRefundResponse
     */
    protected function getResponseInstance()
    {
        return new AccountBookQueryRefundResponse();
    }
}

AccountBookQueryRefundResponseUnMarshaller::__init();
