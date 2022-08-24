<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class TransferWechatOrderResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var TransferWechatOrderResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new TransferWechatOrderResponseUnMarshaller();
    }

    /**
     * @return TransferWechatOrderResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return TransferWechatOrderResponse
     */
    protected function getResponseInstance()
    {
        return new TransferWechatOrderResponse();
    }
}

TransferWechatOrderResponseUnMarshaller::__init();
