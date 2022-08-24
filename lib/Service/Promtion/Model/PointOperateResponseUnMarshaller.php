<?php


namespace Yeepay\Yop\Sdk\Service\Promtion\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class PointOperateResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var PointOperateResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new PointOperateResponseUnMarshaller();
    }

    /**
     * @return PointOperateResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return PointOperateResponse
     */
    protected function getResponseInstance()
    {
        return new PointOperateResponse();
    }
}

PointOperateResponseUnMarshaller::__init();
