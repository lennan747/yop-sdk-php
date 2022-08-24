<?php


namespace Yeepay\Yop\Sdk\Service\Mer\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class ProductModifyQueryV2ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var ProductModifyQueryV2ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new ProductModifyQueryV2ResponseUnMarshaller();
    }

    /**
     * @return ProductModifyQueryV2ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return ProductModifyQueryV2Response
     */
    protected function getResponseInstance()
    {
        return new ProductModifyQueryV2Response();
    }
}

ProductModifyQueryV2ResponseUnMarshaller::__init();
