<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class AccountOpenResponse extends BaseResponse
{
    /**
     * @var AccountOpenWalletRequestRecordResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\MWallet\Model\AccountOpenWalletRequestRecordResponseDTOResult';
    }

    /**
     * @param AccountOpenWalletRequestRecordResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return AccountOpenWalletRequestRecordResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
