<?php


namespace Yeepay\Yop\Sdk\Service\Auth\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class MultipleAuthResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var MultipleAuthResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new MultipleAuthResponseUnMarshaller();
    }

    /**
     * @return MultipleAuthResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return MultipleAuthResponse
     */
    protected function getResponseInstance()
    {
        return new MultipleAuthResponse();
    }
}

MultipleAuthResponseUnMarshaller::__init();
