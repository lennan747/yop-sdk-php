<?php


namespace Yeepay\Yop\Sdk\Service\Promtion\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class SubsidyBackQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var SubsidyBackQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new SubsidyBackQueryResponseUnMarshaller();
    }

    /**
     * @return SubsidyBackQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return SubsidyBackQueryResponse
     */
    protected function getResponseInstance()
    {
        return new SubsidyBackQueryResponse();
    }
}

SubsidyBackQueryResponseUnMarshaller::__init();
