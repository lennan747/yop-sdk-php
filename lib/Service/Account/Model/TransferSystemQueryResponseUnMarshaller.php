<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class TransferSystemQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var TransferSystemQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new TransferSystemQueryResponseUnMarshaller();
    }

    /**
     * @return TransferSystemQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return TransferSystemQueryResponse
     */
    protected function getResponseInstance()
    {
        return new TransferSystemQueryResponse();
    }
}

TransferSystemQueryResponseUnMarshaller::__init();
