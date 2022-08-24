<?php


namespace Yeepay\Yop\Sdk\Service\Mer\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class NotifyRepeatV2ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var NotifyRepeatV2ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new NotifyRepeatV2ResponseUnMarshaller();
    }

    /**
     * @return NotifyRepeatV2ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return NotifyRepeatV2Response
     */
    protected function getResponseInstance()
    {
        return new NotifyRepeatV2Response();
    }
}

NotifyRepeatV2ResponseUnMarshaller::__init();
