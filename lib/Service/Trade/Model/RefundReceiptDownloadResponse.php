<?php


namespace Yeepay\Yop\Sdk\Service\Trade\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class RefundReceiptDownloadResponse extends BaseResponse
{
    /**
     * @var RefundReceiptDownloadReceiptResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Trade\Model\RefundReceiptDownloadReceiptResponseDTOResult';
    }

    /**
     * @param RefundReceiptDownloadReceiptResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return RefundReceiptDownloadReceiptResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
