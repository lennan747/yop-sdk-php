<?php


namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class ComplaintWechatNegotiationHistoryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var ComplaintWechatNegotiationHistoryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new ComplaintWechatNegotiationHistoryResponseUnMarshaller();
    }

    /**
     * @return ComplaintWechatNegotiationHistoryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return ComplaintWechatNegotiationHistoryResponse
     */
    protected function getResponseInstance()
    {
        return new ComplaintWechatNegotiationHistoryResponse();
    }
}

ComplaintWechatNegotiationHistoryResponseUnMarshaller::__init();
