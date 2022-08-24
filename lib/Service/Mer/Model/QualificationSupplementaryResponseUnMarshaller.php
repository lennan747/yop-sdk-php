<?php


namespace Yeepay\Yop\Sdk\Service\Mer\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class QualificationSupplementaryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var QualificationSupplementaryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new QualificationSupplementaryResponseUnMarshaller();
    }

    /**
     * @return QualificationSupplementaryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return QualificationSupplementaryResponse
     */
    protected function getResponseInstance()
    {
        return new QualificationSupplementaryResponse();
    }
}

QualificationSupplementaryResponseUnMarshaller::__init();
