<?php


namespace Yeepay\Yop\Sdk\Service\Std\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class CertOrderResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var CertOrderResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new CertOrderResponseUnMarshaller();
    }

    /**
     * @return CertOrderResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return CertOrderResponse
     */
    protected function getResponseInstance()
    {
        return new CertOrderResponse();
    }
}

CertOrderResponseUnMarshaller::__init();
