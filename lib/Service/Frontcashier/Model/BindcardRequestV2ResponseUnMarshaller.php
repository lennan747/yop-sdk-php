<?php


namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BindcardRequestV2ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BindcardRequestV2ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BindcardRequestV2ResponseUnMarshaller();
    }

    /**
     * @return BindcardRequestV2ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BindcardRequestV2Response
     */
    protected function getResponseInstance()
    {
        return new BindcardRequestV2Response();
    }
}

BindcardRequestV2ResponseUnMarshaller::__init();
