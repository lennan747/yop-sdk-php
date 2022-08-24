<?php


namespace Yeepay\Yop\Sdk\Service\Facepay\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class FacepayProxyBindSendSmsResponse extends BaseResponse
{
    /**
     * @var FacepayProxyBindSendSmsBindCardResponseResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Facepay\Model\FacepayProxyBindSendSmsBindCardResponseResult';
    }

    /**
     * @param FacepayProxyBindSendSmsBindCardResponseResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return FacepayProxyBindSendSmsBindCardResponseResult
     */
    function getResult()
    {
        return $this->result;
    }
}
