<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class TransferB2cQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var TransferB2cQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new TransferB2cQueryResponseUnMarshaller();
    }

    /**
     * @return TransferB2cQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return TransferB2cQueryResponse
     */
    protected function getResponseInstance()
    {
        return new TransferB2cQueryResponse();
    }
}

TransferB2cQueryResponseUnMarshaller::__init();
