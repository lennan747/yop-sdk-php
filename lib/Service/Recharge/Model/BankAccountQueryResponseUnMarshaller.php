<?php


namespace Yeepay\Yop\Sdk\Service\Recharge\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BankAccountQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BankAccountQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BankAccountQueryResponseUnMarshaller();
    }

    /**
     * @return BankAccountQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BankAccountQueryResponse
     */
    protected function getResponseInstance()
    {
        return new BankAccountQueryResponse();
    }
}

BankAccountQueryResponseUnMarshaller::__init();
