<?php


namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class WechatConfigQueryResponse extends BaseResponse
{
    /**
     * @var WechatConfigQueryWechatConfigResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Aggpay\Model\WechatConfigQueryWechatConfigResponseDTOResult';
    }

    /**
     * @param WechatConfigQueryWechatConfigResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return WechatConfigQueryWechatConfigResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
