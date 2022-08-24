<?php


namespace Yeepay\Yop\Sdk\Service\P2f\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class ZzdfOrderResponse extends BaseResponse
{
    /**
     * @var ZzdfOrderRechargeAndPayRspDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\P2f\Model\ZzdfOrderRechargeAndPayRspDTOResult';
    }

    /**
     * @param ZzdfOrderRechargeAndPayRspDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return ZzdfOrderRechargeAndPayRspDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
