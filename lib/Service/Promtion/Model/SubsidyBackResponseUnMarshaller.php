<?php


namespace Yeepay\Yop\Sdk\Service\Promtion\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class SubsidyBackResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var SubsidyBackResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new SubsidyBackResponseUnMarshaller();
    }

    /**
     * @return SubsidyBackResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return SubsidyBackResponse
     */
    protected function getResponseInstance()
    {
        return new SubsidyBackResponse();
    }
}

SubsidyBackResponseUnMarshaller::__init();
