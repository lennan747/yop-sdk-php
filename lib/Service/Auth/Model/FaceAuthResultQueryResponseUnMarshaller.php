<?php


namespace Yeepay\Yop\Sdk\Service\Auth\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class FaceAuthResultQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var FaceAuthResultQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new FaceAuthResultQueryResponseUnMarshaller();
    }

    /**
     * @return FaceAuthResultQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return FaceAuthResultQueryResponse
     */
    protected function getResponseInstance()
    {
        return new FaceAuthResultQueryResponse();
    }
}

FaceAuthResultQueryResponseUnMarshaller::__init();
