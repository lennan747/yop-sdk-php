<?php


namespace Yeepay\Yop\Sdk\Service\Facepay\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class FacepayProxyBindFirstCardResponse extends BaseResponse
{
    /**
     * @var FacepayProxyBindFirstCardBindCardResponseResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Facepay\Model\FacepayProxyBindFirstCardBindCardResponseResult';
    }

    /**
     * @param FacepayProxyBindFirstCardBindCardResponseResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return FacepayProxyBindFirstCardBindCardResponseResult
     */
    function getResult()
    {
        return $this->result;
    }
}
