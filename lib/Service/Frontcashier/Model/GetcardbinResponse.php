<?php


namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class GetcardbinResponse extends BaseResponse
{
    /**
     * @var GetcardbinRecognizeCardBinResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Frontcashier\Model\GetcardbinRecognizeCardBinResponseDTOResult';
    }

    /**
     * @param GetcardbinRecognizeCardBinResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return GetcardbinRecognizeCardBinResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
