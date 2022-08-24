<?php


namespace Yeepay\Yop\Sdk\Service\Auth\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class OcrIdcardResponse extends BaseResponse
{
    /**
     * @var OcrIdcardOcrRecognizeResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Auth\Model\OcrIdcardOcrRecognizeResponseDTOResult';
    }

    /**
     * @param OcrIdcardOcrRecognizeResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return OcrIdcardOcrRecognizeResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
