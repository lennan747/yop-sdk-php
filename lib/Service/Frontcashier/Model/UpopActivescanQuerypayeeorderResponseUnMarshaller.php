<?php


namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class UpopActivescanQuerypayeeorderResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var UpopActivescanQuerypayeeorderResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new UpopActivescanQuerypayeeorderResponseUnMarshaller();
    }

    /**
     * @return UpopActivescanQuerypayeeorderResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return UpopActivescanQuerypayeeorderResponse
     */
    protected function getResponseInstance()
    {
        return new UpopActivescanQuerypayeeorderResponse();
    }
}

UpopActivescanQuerypayeeorderResponseUnMarshaller::__init();
