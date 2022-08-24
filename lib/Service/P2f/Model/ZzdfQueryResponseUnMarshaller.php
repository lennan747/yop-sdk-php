<?php


namespace Yeepay\Yop\Sdk\Service\P2f\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class ZzdfQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var ZzdfQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new ZzdfQueryResponseUnMarshaller();
    }

    /**
     * @return ZzdfQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return ZzdfQueryResponse
     */
    protected function getResponseInstance()
    {
        return new ZzdfQueryResponse();
    }
}

ZzdfQueryResponseUnMarshaller::__init();
