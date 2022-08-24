<?php


namespace Yeepay\Yop\Sdk\Service\Cnppay\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BankLimitQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BankLimitQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BankLimitQueryResponseUnMarshaller();
    }

    /**
     * @return BankLimitQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BankLimitQueryResponse
     */
    protected function getResponseInstance()
    {
        return new BankLimitQueryResponse();
    }
}

BankLimitQueryResponseUnMarshaller::__init();
