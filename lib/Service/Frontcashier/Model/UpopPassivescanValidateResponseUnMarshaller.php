<?php


namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class UpopPassivescanValidateResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var UpopPassivescanValidateResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new UpopPassivescanValidateResponseUnMarshaller();
    }

    /**
     * @return UpopPassivescanValidateResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return UpopPassivescanValidateResponse
     */
    protected function getResponseInstance()
    {
        return new UpopPassivescanValidateResponse();
    }
}

UpopPassivescanValidateResponseUnMarshaller::__init();
