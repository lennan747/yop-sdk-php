<?php


namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class UpopActivescanQuerypayresultResponse extends BaseResponse
{
    /**
     * @var UpopActivescanQuerypayresultOpenQueryActiveScanPayResultResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Frontcashier\Model\UpopActivescanQuerypayresultOpenQueryActiveScanPayResultResponseDTOResult';
    }

    /**
     * @param UpopActivescanQuerypayresultOpenQueryActiveScanPayResultResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return UpopActivescanQuerypayresultOpenQueryActiveScanPayResultResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
