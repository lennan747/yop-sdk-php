<?php


namespace Yeepay\Yop\Sdk\Service\Invoice\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class ApplyResponse extends BaseResponse
{
    /**
     * @var ApplyApplyInvoiceYOPResponseDtoResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Invoice\Model\ApplyApplyInvoiceYOPResponseDtoResult';
    }

    /**
     * @param ApplyApplyInvoiceYOPResponseDtoResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return ApplyApplyInvoiceYOPResponseDtoResult
     */
    function getResult()
    {
        return $this->result;
    }
}
