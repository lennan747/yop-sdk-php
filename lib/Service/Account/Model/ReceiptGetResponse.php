<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class ReceiptGetResponse extends BaseResponse
{
    /**
     * @var ReceiptGetReceiptRespDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\ReceiptGetReceiptRespDTOResult';
    }

    /**
     * @param ReceiptGetReceiptRespDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return ReceiptGetReceiptRespDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
