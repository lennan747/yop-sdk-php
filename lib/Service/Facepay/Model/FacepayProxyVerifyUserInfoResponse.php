<?php


namespace Yeepay\Yop\Sdk\Service\Facepay\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class FacepayProxyVerifyUserInfoResponse extends BaseResponse
{
    /**
     * @var FacepayProxyVerifyUserInfoUserInfoResponseResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Facepay\Model\FacepayProxyVerifyUserInfoUserInfoResponseResult';
    }

    /**
     * @param FacepayProxyVerifyUserInfoUserInfoResponseResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return FacepayProxyVerifyUserInfoUserInfoResponseResult
     */
    function getResult()
    {
        return $this->result;
    }
}
