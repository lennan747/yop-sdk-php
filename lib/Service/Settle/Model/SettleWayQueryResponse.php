<?php


namespace Yeepay\Yop\Sdk\Service\Settle\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class SettleWayQueryResponse extends BaseResponse
{
    /**
     * @var SettleWayQuerySettleWayQueryYOPResponseDtoResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Settle\Model\SettleWayQuerySettleWayQueryYOPResponseDtoResult';
    }

    /**
     * @param SettleWayQuerySettleWayQueryYOPResponseDtoResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return SettleWayQuerySettleWayQueryYOPResponseDtoResult
     */
    function getResult()
    {
        return $this->result;
    }
}
