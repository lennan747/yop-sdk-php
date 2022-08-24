<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class ReceiptGatherResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var ReceiptGatherResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new ReceiptGatherResponseUnMarshaller();
    }

    /**
     * @return ReceiptGatherResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return ReceiptGatherResponse
     */
    protected function getResponseInstance()
    {
        return new ReceiptGatherResponse();
    }
}

ReceiptGatherResponseUnMarshaller::__init();
