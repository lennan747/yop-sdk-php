<?php


namespace Yeepay\Yop\Sdk\Service\Divide\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class DividebackQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var DividebackQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new DividebackQueryResponseUnMarshaller();
    }

    /**
     * @return DividebackQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return DividebackQueryResponse
     */
    protected function getResponseInstance()
    {
        return new DividebackQueryResponse();
    }
}

DividebackQueryResponseUnMarshaller::__init();
