<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class TransferWechatQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var TransferWechatQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new TransferWechatQueryResponseUnMarshaller();
    }

    /**
     * @return TransferWechatQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return TransferWechatQueryResponse
     */
    protected function getResponseInstance()
    {
        return new TransferWechatQueryResponse();
    }
}

TransferWechatQueryResponseUnMarshaller::__init();
