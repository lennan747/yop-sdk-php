<?php


namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class WechatConfigAddV2ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var WechatConfigAddV2ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new WechatConfigAddV2ResponseUnMarshaller();
    }

    /**
     * @return WechatConfigAddV2ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return WechatConfigAddV2Response
     */
    protected function getResponseInstance()
    {
        return new WechatConfigAddV2Response();
    }
}

WechatConfigAddV2ResponseUnMarshaller::__init();
