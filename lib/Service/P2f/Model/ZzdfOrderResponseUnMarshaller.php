<?php


namespace Yeepay\Yop\Sdk\Service\P2f\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class ZzdfOrderResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var ZzdfOrderResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new ZzdfOrderResponseUnMarshaller();
    }

    /**
     * @return ZzdfOrderResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return ZzdfOrderResponse
     */
    protected function getResponseInstance()
    {
        return new ZzdfOrderResponse();
    }
}

ZzdfOrderResponseUnMarshaller::__init();
