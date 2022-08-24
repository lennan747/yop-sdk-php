<?php


namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class UpopActivescanPayResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var UpopActivescanPayResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new UpopActivescanPayResponseUnMarshaller();
    }

    /**
     * @return UpopActivescanPayResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return UpopActivescanPayResponse
     */
    protected function getResponseInstance()
    {
        return new UpopActivescanPayResponse();
    }
}

UpopActivescanPayResponseUnMarshaller::__init();
