<?php


namespace Yeepay\Yop\Sdk\Service\Mer\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class ProductFeeModifyV2ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var ProductFeeModifyV2ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new ProductFeeModifyV2ResponseUnMarshaller();
    }

    /**
     * @return ProductFeeModifyV2ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return ProductFeeModifyV2Response
     */
    protected function getResponseInstance()
    {
        return new ProductFeeModifyV2Response();
    }
}

ProductFeeModifyV2ResponseUnMarshaller::__init();
