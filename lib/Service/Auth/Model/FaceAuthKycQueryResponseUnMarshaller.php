<?php


namespace Yeepay\Yop\Sdk\Service\Auth\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class FaceAuthKycQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var FaceAuthKycQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new FaceAuthKycQueryResponseUnMarshaller();
    }

    /**
     * @return FaceAuthKycQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return FaceAuthKycQueryResponse
     */
    protected function getResponseInstance()
    {
        return new FaceAuthKycQueryResponse();
    }
}

FaceAuthKycQueryResponseUnMarshaller::__init();
