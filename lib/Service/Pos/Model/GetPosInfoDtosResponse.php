<?php


namespace Yeepay\Yop\Sdk\Service\Pos\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class GetPosInfoDtosResponse extends BaseResponse
{
    /**
     * @var GetPosInfoDtosPosInfoResponseParamResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Pos\Model\GetPosInfoDtosPosInfoResponseParamResult';
    }

    /**
     * @param GetPosInfoDtosPosInfoResponseParamResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return GetPosInfoDtosPosInfoResponseParamResult
     */
    function getResult()
    {
        return $this->result;
    }
}
