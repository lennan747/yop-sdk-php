<?php


namespace Yeepay\Yop\Sdk\Service\Auth\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class FaceAuthKycResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var FaceAuthKycResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new FaceAuthKycResponseUnMarshaller();
    }

    /**
     * @return FaceAuthKycResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return FaceAuthKycResponse
     */
    protected function getResponseInstance()
    {
        return new FaceAuthKycResponse();
    }
}

FaceAuthKycResponseUnMarshaller::__init();
