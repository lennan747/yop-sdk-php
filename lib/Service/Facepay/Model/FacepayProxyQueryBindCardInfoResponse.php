<?php


namespace Yeepay\Yop\Sdk\Service\Facepay\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class FacepayProxyQueryBindCardInfoResponse extends BaseResponse
{
    /**
     * @var FacepayProxyQueryBindCardInfoBindCardInfoResponseResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Facepay\Model\FacepayProxyQueryBindCardInfoBindCardInfoResponseResult';
    }

    /**
     * @param FacepayProxyQueryBindCardInfoBindCardInfoResponseResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return FacepayProxyQueryBindCardInfoBindCardInfoResponseResult
     */
    function getResult()
    {
        return $this->result;
    }
}
