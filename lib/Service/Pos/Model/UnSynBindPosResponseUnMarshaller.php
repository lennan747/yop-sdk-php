<?php


namespace Yeepay\Yop\Sdk\Service\Pos\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class UnSynBindPosResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var UnSynBindPosResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new UnSynBindPosResponseUnMarshaller();
    }

    /**
     * @return UnSynBindPosResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return UnSynBindPosResponse
     */
    protected function getResponseInstance()
    {
        return new UnSynBindPosResponse();
    }
}

UnSynBindPosResponseUnMarshaller::__init();
