<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class WalletIndexV2ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var WalletIndexV2ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new WalletIndexV2ResponseUnMarshaller();
    }

    /**
     * @return WalletIndexV2ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return WalletIndexV2Response
     */
    protected function getResponseInstance()
    {
        return new WalletIndexV2Response();
    }
}

WalletIndexV2ResponseUnMarshaller::__init();
