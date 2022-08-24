<?php


namespace Yeepay\Yop\Sdk\Service\Trade\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class ReceiptDownloadResponse extends BaseResponse
{
    /**
     * @var ReceiptDownloadReceiptResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Trade\Model\ReceiptDownloadReceiptResponseDTOResult';
    }

    /**
     * @param ReceiptDownloadReceiptResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return ReceiptDownloadReceiptResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
