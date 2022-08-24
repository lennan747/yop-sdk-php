<?php


namespace Yeepay\Yop\Sdk\Service\Divide\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class DivideResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var DivideResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new DivideResponseUnMarshaller();
    }

    /**
     * @return DivideResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return DivideResponse
     */
    protected function getResponseInstance()
    {
        return new DivideResponse();
    }
}

DivideResponseUnMarshaller::__init();
