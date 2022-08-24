<?php


namespace Yeepay\Yop\Sdk\Service\Settle\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class SettleWayModifyRatioResponse extends BaseResponse
{
    /**
     * @var SettleWayModifyRatioModifySettleWayRatioResponseDtoResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Settle\Model\SettleWayModifyRatioModifySettleWayRatioResponseDtoResult';
    }

    /**
     * @param SettleWayModifyRatioModifySettleWayRatioResponseDtoResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return SettleWayModifyRatioModifySettleWayRatioResponseDtoResult
     */
    function getResult()
    {
        return $this->result;
    }
}
