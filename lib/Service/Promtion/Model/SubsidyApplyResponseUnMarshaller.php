<?php


namespace Yeepay\Yop\Sdk\Service\Promtion\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class SubsidyApplyResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var SubsidyApplyResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new SubsidyApplyResponseUnMarshaller();
    }

    /**
     * @return SubsidyApplyResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return SubsidyApplyResponse
     */
    protected function getResponseInstance()
    {
        return new SubsidyApplyResponse();
    }
}

SubsidyApplyResponseUnMarshaller::__init();
