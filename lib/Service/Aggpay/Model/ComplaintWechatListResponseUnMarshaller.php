<?php


namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class ComplaintWechatListResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var ComplaintWechatListResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new ComplaintWechatListResponseUnMarshaller();
    }

    /**
     * @return ComplaintWechatListResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return ComplaintWechatListResponse
     */
    protected function getResponseInstance()
    {
        return new ComplaintWechatListResponse();
    }
}

ComplaintWechatListResponseUnMarshaller::__init();
