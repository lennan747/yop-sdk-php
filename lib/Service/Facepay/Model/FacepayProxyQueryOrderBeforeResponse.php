<?php


namespace Yeepay\Yop\Sdk\Service\Facepay\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class FacepayProxyQueryOrderBeforeResponse extends BaseResponse
{
    /**
     * @var FacepayProxyQueryOrderBeforeOrderBeforeResponseResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Facepay\Model\FacepayProxyQueryOrderBeforeOrderBeforeResponseResult';
    }

    /**
     * @param FacepayProxyQueryOrderBeforeOrderBeforeResponseResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return FacepayProxyQueryOrderBeforeOrderBeforeResponseResult
     */
    function getResult()
    {
        return $this->result;
    }
}
