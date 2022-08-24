<?php


namespace Yeepay\Yop\Sdk\Service\Mer\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class QualificationSupplementaryResponse extends BaseResponse
{
    /**
     * @var QualificationSupplementaryBaseRespDtoResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Mer\Model\QualificationSupplementaryBaseRespDtoResult';
    }

    /**
     * @param QualificationSupplementaryBaseRespDtoResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return QualificationSupplementaryBaseRespDtoResult
     */
    function getResult()
    {
        return $this->result;
    }
}
