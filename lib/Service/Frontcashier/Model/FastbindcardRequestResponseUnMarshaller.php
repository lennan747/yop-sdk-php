<?php


namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class FastbindcardRequestResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var FastbindcardRequestResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new FastbindcardRequestResponseUnMarshaller();
    }

    /**
     * @return FastbindcardRequestResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return FastbindcardRequestResponse
     */
    protected function getResponseInstance()
    {
        return new FastbindcardRequestResponse();
    }
}

FastbindcardRequestResponseUnMarshaller::__init();
