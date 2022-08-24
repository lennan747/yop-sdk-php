<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class PaySystemQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var PaySystemQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new PaySystemQueryResponseUnMarshaller();
    }

    /**
     * @return PaySystemQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return PaySystemQueryResponse
     */
    protected function getResponseInstance()
    {
        return new PaySystemQueryResponse();
    }
}

PaySystemQueryResponseUnMarshaller::__init();
