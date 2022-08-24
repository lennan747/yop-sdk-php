<?php


namespace Yeepay\Yop\Sdk\Service\Auth\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class FaceAuthResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var FaceAuthResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new FaceAuthResponseUnMarshaller();
    }

    /**
     * @return FaceAuthResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return FaceAuthResponse
     */
    protected function getResponseInstance()
    {
        return new FaceAuthResponse();
    }
}

FaceAuthResponseUnMarshaller::__init();
