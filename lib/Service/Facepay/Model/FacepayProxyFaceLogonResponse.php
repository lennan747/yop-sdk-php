<?php


namespace Yeepay\Yop\Sdk\Service\Facepay\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class FacepayProxyFaceLogonResponse extends BaseResponse
{
    /**
     * @var FacepayProxyFaceLogonFaceLogonResponseResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Facepay\Model\FacepayProxyFaceLogonFaceLogonResponseResult';
    }

    /**
     * @param FacepayProxyFaceLogonFaceLogonResponseResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return FacepayProxyFaceLogonFaceLogonResponseResult
     */
    function getResult()
    {
        return $this->result;
    }
}
