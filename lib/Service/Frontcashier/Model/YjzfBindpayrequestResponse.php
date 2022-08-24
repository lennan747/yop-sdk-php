<?php


namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class YjzfBindpayrequestResponse extends BaseResponse
{
    /**
     * @var YjzfBindpayrequestAPIYJZFBindPaymentResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Frontcashier\Model\YjzfBindpayrequestAPIYJZFBindPaymentResponseDTOResult';
    }

    /**
     * @param YjzfBindpayrequestAPIYJZFBindPaymentResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return YjzfBindpayrequestAPIYJZFBindPaymentResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
