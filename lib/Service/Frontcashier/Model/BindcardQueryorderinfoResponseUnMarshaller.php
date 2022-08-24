<?php


namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BindcardQueryorderinfoResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BindcardQueryorderinfoResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BindcardQueryorderinfoResponseUnMarshaller();
    }

    /**
     * @return BindcardQueryorderinfoResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BindcardQueryorderinfoResponse
     */
    protected function getResponseInstance()
    {
        return new BindcardQueryorderinfoResponse();
    }
}

BindcardQueryorderinfoResponseUnMarshaller::__init();
