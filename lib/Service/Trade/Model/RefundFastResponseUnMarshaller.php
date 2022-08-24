<?php


namespace Yeepay\Yop\Sdk\Service\Trade\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class RefundFastResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var RefundFastResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new RefundFastResponseUnMarshaller();
    }

    /**
     * @return RefundFastResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return RefundFastResponse
     */
    protected function getResponseInstance()
    {
        return new RefundFastResponse();
    }
}

RefundFastResponseUnMarshaller::__init();
