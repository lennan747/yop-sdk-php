<?php


namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class ComplaintWechatFeedbackResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var ComplaintWechatFeedbackResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new ComplaintWechatFeedbackResponseUnMarshaller();
    }

    /**
     * @return ComplaintWechatFeedbackResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return ComplaintWechatFeedbackResponse
     */
    protected function getResponseInstance()
    {
        return new ComplaintWechatFeedbackResponse();
    }
}

ComplaintWechatFeedbackResponseUnMarshaller::__init();
