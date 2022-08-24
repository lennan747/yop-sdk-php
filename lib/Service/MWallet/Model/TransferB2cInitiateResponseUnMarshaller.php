<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class TransferB2cInitiateResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var TransferB2cInitiateResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new TransferB2cInitiateResponseUnMarshaller();
    }

    /**
     * @return TransferB2cInitiateResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return TransferB2cInitiateResponse
     */
    protected function getResponseInstance()
    {
        return new TransferB2cInitiateResponse();
    }
}

TransferB2cInitiateResponseUnMarshaller::__init();
