<?php


namespace Yeepay\Yop\Sdk\Service\Divide\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class DividebackResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var DividebackResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new DividebackResponseUnMarshaller();
    }

    /**
     * @return DividebackResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return DividebackResponse
     */
    protected function getResponseInstance()
    {
        return new DividebackResponse();
    }
}

DividebackResponseUnMarshaller::__init();
