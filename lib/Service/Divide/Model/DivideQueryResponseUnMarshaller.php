<?php


namespace Yeepay\Yop\Sdk\Service\Divide\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class DivideQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var DivideQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new DivideQueryResponseUnMarshaller();
    }

    /**
     * @return DivideQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return DivideQueryResponse
     */
    protected function getResponseInstance()
    {
        return new DivideQueryResponse();
    }
}

DivideQueryResponseUnMarshaller::__init();
