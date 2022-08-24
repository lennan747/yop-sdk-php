<?php


namespace Yeepay\Yop\Sdk\Service\Pos\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class GetPosInfoDtosResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var GetPosInfoDtosResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new GetPosInfoDtosResponseUnMarshaller();
    }

    /**
     * @return GetPosInfoDtosResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return GetPosInfoDtosResponse
     */
    protected function getResponseInstance()
    {
        return new GetPosInfoDtosResponse();
    }
}

GetPosInfoDtosResponseUnMarshaller::__init();
