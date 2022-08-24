<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class PayOrderResponse extends BaseResponse
{
    /**
     * @var PayOrderRemitRespDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\PayOrderRemitRespDTOResult';
    }

    /**
     * @param PayOrderRemitRespDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return PayOrderRemitRespDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
