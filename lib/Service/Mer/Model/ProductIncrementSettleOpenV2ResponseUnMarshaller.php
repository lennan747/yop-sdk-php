<?php


namespace Yeepay\Yop\Sdk\Service\Mer\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class ProductIncrementSettleOpenV2ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var ProductIncrementSettleOpenV2ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new ProductIncrementSettleOpenV2ResponseUnMarshaller();
    }

    /**
     * @return ProductIncrementSettleOpenV2ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return ProductIncrementSettleOpenV2Response
     */
    protected function getResponseInstance()
    {
        return new ProductIncrementSettleOpenV2Response();
    }
}

ProductIncrementSettleOpenV2ResponseUnMarshaller::__init();
