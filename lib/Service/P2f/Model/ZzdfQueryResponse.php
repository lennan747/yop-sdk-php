<?php


namespace Yeepay\Yop\Sdk\Service\P2f\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class ZzdfQueryResponse extends BaseResponse
{
    /**
     * @var ZzdfQueryQueryRechargeAndPayRspDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\P2f\Model\ZzdfQueryQueryRechargeAndPayRspDTOResult';
    }

    /**
     * @param ZzdfQueryQueryRechargeAndPayRspDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return ZzdfQueryQueryRechargeAndPayRspDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
