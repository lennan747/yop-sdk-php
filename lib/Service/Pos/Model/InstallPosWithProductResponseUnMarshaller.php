<?php


namespace Yeepay\Yop\Sdk\Service\Pos\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class InstallPosWithProductResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var InstallPosWithProductResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new InstallPosWithProductResponseUnMarshaller();
    }

    /**
     * @return InstallPosWithProductResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return InstallPosWithProductResponse
     */
    protected function getResponseInstance()
    {
        return new InstallPosWithProductResponse();
    }
}

InstallPosWithProductResponseUnMarshaller::__init();
