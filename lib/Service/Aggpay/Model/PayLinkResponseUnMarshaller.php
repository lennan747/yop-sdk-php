<?php


namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class PayLinkResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var PayLinkResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new PayLinkResponseUnMarshaller();
    }

    /**
     * @return PayLinkResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return PayLinkResponse
     */
    protected function getResponseInstance()
    {
        return new PayLinkResponse();
    }
}

PayLinkResponseUnMarshaller::__init();
