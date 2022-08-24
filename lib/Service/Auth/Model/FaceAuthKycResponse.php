<?php


namespace Yeepay\Yop\Sdk\Service\Auth\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class FaceAuthKycResponse extends BaseResponse
{
    /**
     * @var FaceAuthKycFaceAuthResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Auth\Model\FaceAuthKycFaceAuthResponseDTOResult';
    }

    /**
     * @param FaceAuthKycFaceAuthResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return FaceAuthKycFaceAuthResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
