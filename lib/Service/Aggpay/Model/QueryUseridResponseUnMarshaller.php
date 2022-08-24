<?php


namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class QueryUseridResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var QueryUseridResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new QueryUseridResponseUnMarshaller();
    }

    /**
     * @return QueryUseridResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return QueryUseridResponse
     */
    protected function getResponseInstance()
    {
        return new QueryUseridResponse();
    }
}

QueryUseridResponseUnMarshaller::__init();
