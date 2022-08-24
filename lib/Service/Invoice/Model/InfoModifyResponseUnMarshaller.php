<?php


namespace Yeepay\Yop\Sdk\Service\Invoice\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class InfoModifyResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var InfoModifyResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new InfoModifyResponseUnMarshaller();
    }

    /**
     * @return InfoModifyResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return InfoModifyResponse
     */
    protected function getResponseInstance()
    {
        return new InfoModifyResponse();
    }
}

InfoModifyResponseUnMarshaller::__init();
