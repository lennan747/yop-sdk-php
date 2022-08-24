<?php


namespace Yeepay\Yop\Sdk\Service\Invoice\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class InfoQueryResponse extends BaseResponse
{
    /**
     * @var InfoQueryQueryInvoiceInfoYOPResponseDtoResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Invoice\Model\InfoQueryQueryInvoiceInfoYOPResponseDtoResult';
    }

    /**
     * @param InfoQueryQueryInvoiceInfoYOPResponseDtoResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return InfoQueryQueryInvoiceInfoYOPResponseDtoResult
     */
    function getResult()
    {
        return $this->result;
    }
}
