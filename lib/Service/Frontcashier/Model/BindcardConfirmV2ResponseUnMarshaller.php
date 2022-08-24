<?php


namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BindcardConfirmV2ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BindcardConfirmV2ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BindcardConfirmV2ResponseUnMarshaller();
    }

    /**
     * @return BindcardConfirmV2ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BindcardConfirmV2Response
     */
    protected function getResponseInstance()
    {
        return new BindcardConfirmV2Response();
    }
}

BindcardConfirmV2ResponseUnMarshaller::__init();
