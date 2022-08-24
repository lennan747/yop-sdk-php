<?php


namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class WechatConfigQueryV2ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var WechatConfigQueryV2ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new WechatConfigQueryV2ResponseUnMarshaller();
    }

    /**
     * @return WechatConfigQueryV2ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return WechatConfigQueryV2Response
     */
    protected function getResponseInstance()
    {
        return new WechatConfigQueryV2Response();
    }
}

WechatConfigQueryV2ResponseUnMarshaller::__init();
