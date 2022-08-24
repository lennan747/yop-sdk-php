<?php


namespace Yeepay\Yop\Sdk\Service\Mer\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class ProductFeeQueryV2ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var ProductFeeQueryV2ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new ProductFeeQueryV2ResponseUnMarshaller();
    }

    /**
     * @return ProductFeeQueryV2ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return ProductFeeQueryV2Response
     */
    protected function getResponseInstance()
    {
        return new ProductFeeQueryV2Response();
    }
}

ProductFeeQueryV2ResponseUnMarshaller::__init();
