<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class TransferB2cMarketResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var TransferB2cMarketResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new TransferB2cMarketResponseUnMarshaller();
    }

    /**
     * @return TransferB2cMarketResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return TransferB2cMarketResponse
     */
    protected function getResponseInstance()
    {
        return new TransferB2cMarketResponse();
    }
}

TransferB2cMarketResponseUnMarshaller::__init();
