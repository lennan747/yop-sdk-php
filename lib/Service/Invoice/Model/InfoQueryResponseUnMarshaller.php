<?php


namespace Yeepay\Yop\Sdk\Service\Invoice\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class InfoQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var InfoQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new InfoQueryResponseUnMarshaller();
    }

    /**
     * @return InfoQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return InfoQueryResponse
     */
    protected function getResponseInstance()
    {
        return new InfoQueryResponse();
    }
}

InfoQueryResponseUnMarshaller::__init();
