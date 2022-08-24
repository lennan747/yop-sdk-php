<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class BankAccountQueryComplaintResponse extends BaseResponse
{
    /**
     * @var BankAccountQueryComplaintQueryComplaintOrderRespDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\MWallet\Model\BankAccountQueryComplaintQueryComplaintOrderRespDTOResult';
    }

    /**
     * @param BankAccountQueryComplaintQueryComplaintOrderRespDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return BankAccountQueryComplaintQueryComplaintOrderRespDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
