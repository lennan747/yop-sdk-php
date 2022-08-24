<?php


namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class BankTransferQueryResponse extends BaseResponse
{
    /**
     * @var BankTransferQueryAPIOfflineTransferQueryResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Frontcashier\Model\BankTransferQueryAPIOfflineTransferQueryResponseDTOResult';
    }

    /**
     * @param BankTransferQueryAPIOfflineTransferQueryResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return BankTransferQueryAPIOfflineTransferQueryResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
