<?php


namespace Yeepay\Yop\Sdk\Service\Mer\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class NotifyRepeatV2Response extends BaseResponse
{
    /**
     * @var NotifyRepeatV2MerchantNetInRepeatNotifyRespDtoResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Mer\Model\NotifyRepeatV2MerchantNetInRepeatNotifyRespDtoResult';
    }

    /**
     * @param NotifyRepeatV2MerchantNetInRepeatNotifyRespDtoResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return NotifyRepeatV2MerchantNetInRepeatNotifyRespDtoResult
     */
    function getResult()
    {
        return $this->result;
    }
}
