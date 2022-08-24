<?php


namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class ComplaintWechatListResponse extends BaseResponse
{
    /**
     * @var ComplaintWechatListWechatComplaintListFlatResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Aggpay\Model\ComplaintWechatListWechatComplaintListFlatResponseDTOResult';
    }

    /**
     * @param ComplaintWechatListWechatComplaintListFlatResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return ComplaintWechatListWechatComplaintListFlatResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
