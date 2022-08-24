<?php


namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class UpopActivescanQuerypayresultResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var UpopActivescanQuerypayresultResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new UpopActivescanQuerypayresultResponseUnMarshaller();
    }

    /**
     * @return UpopActivescanQuerypayresultResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return UpopActivescanQuerypayresultResponse
     */
    protected function getResponseInstance()
    {
        return new UpopActivescanQuerypayresultResponse();
    }
}

UpopActivescanQuerypayresultResponseUnMarshaller::__init();
