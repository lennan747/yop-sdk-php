<?php


namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class ComplaintWechatDetailsResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var ComplaintWechatDetailsResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new ComplaintWechatDetailsResponseUnMarshaller();
    }

    /**
     * @return ComplaintWechatDetailsResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return ComplaintWechatDetailsResponse
     */
    protected function getResponseInstance()
    {
        return new ComplaintWechatDetailsResponse();
    }
}

ComplaintWechatDetailsResponseUnMarshaller::__init();
