<?php


namespace Yeepay\Yop\Sdk\Service\Auth\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class OcrIdcardResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var OcrIdcardResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new OcrIdcardResponseUnMarshaller();
    }

    /**
     * @return OcrIdcardResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return OcrIdcardResponse
     */
    protected function getResponseInstance()
    {
        return new OcrIdcardResponse();
    }
}

OcrIdcardResponseUnMarshaller::__init();
