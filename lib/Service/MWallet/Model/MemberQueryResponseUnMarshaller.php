<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class MemberQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var MemberQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new MemberQueryResponseUnMarshaller();
    }

    /**
     * @return MemberQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return MemberQueryResponse
     */
    protected function getResponseInstance()
    {
        return new MemberQueryResponse();
    }
}

MemberQueryResponseUnMarshaller::__init();
