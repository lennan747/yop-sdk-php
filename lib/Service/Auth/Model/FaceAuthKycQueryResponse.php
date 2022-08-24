<?php


namespace Yeepay\Yop\Sdk\Service\Auth\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class FaceAuthKycQueryResponse extends BaseResponse
{
    /**
     * @var FaceAuthKycQueryFaceAuthResultQueryResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Auth\Model\FaceAuthKycQueryFaceAuthResultQueryResponseDTOResult';
    }

    /**
     * @param FaceAuthKycQueryFaceAuthResultQueryResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return FaceAuthKycQueryFaceAuthResultQueryResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
