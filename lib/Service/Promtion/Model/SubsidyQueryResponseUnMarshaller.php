<?php


namespace Yeepay\Yop\Sdk\Service\Promtion\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class SubsidyQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var SubsidyQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new SubsidyQueryResponseUnMarshaller();
    }

    /**
     * @return SubsidyQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return SubsidyQueryResponse
     */
    protected function getResponseInstance()
    {
        return new SubsidyQueryResponse();
    }
}

SubsidyQueryResponseUnMarshaller::__init();
