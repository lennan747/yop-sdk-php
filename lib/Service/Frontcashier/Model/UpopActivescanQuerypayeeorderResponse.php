<?php


namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class UpopActivescanQuerypayeeorderResponse extends BaseResponse
{
    /**
     * @var UpopActivescanQuerypayeeorderOpenQueryPayeeOrderInfoResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Frontcashier\Model\UpopActivescanQuerypayeeorderOpenQueryPayeeOrderInfoResponseDTOResult';
    }

    /**
     * @param UpopActivescanQuerypayeeorderOpenQueryPayeeOrderInfoResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return UpopActivescanQuerypayeeorderOpenQueryPayeeOrderInfoResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
