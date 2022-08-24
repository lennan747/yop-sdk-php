<?php


namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class ComplaintWechatFeedbackResponse extends BaseResponse
{
    /**
     * @var ComplaintWechatFeedbackBaseResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Aggpay\Model\ComplaintWechatFeedbackBaseResponseDTOResult';
    }

    /**
     * @param ComplaintWechatFeedbackBaseResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return ComplaintWechatFeedbackBaseResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
