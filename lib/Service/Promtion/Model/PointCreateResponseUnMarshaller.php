<?php


namespace Yeepay\Yop\Sdk\Service\Promtion\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class PointCreateResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var PointCreateResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new PointCreateResponseUnMarshaller();
    }

    /**
     * @return PointCreateResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return PointCreateResponse
     */
    protected function getResponseInstance()
    {
        return new PointCreateResponse();
    }
}

PointCreateResponseUnMarshaller::__init();
