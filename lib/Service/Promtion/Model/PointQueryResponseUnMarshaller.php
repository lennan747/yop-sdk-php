<?php


namespace Yeepay\Yop\Sdk\Service\Promtion\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class PointQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var PointQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new PointQueryResponseUnMarshaller();
    }

    /**
     * @return PointQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return PointQueryResponse
     */
    protected function getResponseInstance()
    {
        return new PointQueryResponse();
    }
}

PointQueryResponseUnMarshaller::__init();
