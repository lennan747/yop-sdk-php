<?php


namespace Yeepay\Yop\Sdk\Service\Auth\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class FaceAuthResponse extends BaseResponse
{
    /**
     * @var FaceAuthFaceAuthResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Auth\Model\FaceAuthFaceAuthResponseDTOResult';
    }

    /**
     * @param FaceAuthFaceAuthResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return FaceAuthFaceAuthResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
