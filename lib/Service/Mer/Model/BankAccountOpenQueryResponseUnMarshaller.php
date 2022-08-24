<?php


namespace Yeepay\Yop\Sdk\Service\Mer\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BankAccountOpenQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BankAccountOpenQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BankAccountOpenQueryResponseUnMarshaller();
    }

    /**
     * @return BankAccountOpenQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BankAccountOpenQueryResponse
     */
    protected function getResponseInstance()
    {
        return new BankAccountOpenQueryResponse();
    }
}

BankAccountOpenQueryResponseUnMarshaller::__init();
