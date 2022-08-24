<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class CardQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var CardQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new CardQueryResponseUnMarshaller();
    }

    /**
     * @return CardQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return CardQueryResponse
     */
    protected function getResponseInstance()
    {
        return new CardQueryResponse();
    }
}

CardQueryResponseUnMarshaller::__init();
