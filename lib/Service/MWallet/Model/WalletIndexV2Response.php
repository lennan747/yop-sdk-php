<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class WalletIndexV2Response extends BaseResponse
{
    /**
     * @var WalletIndexV2RequestURLResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\MWallet\Model\WalletIndexV2RequestURLResponseDTOResult';
    }

    /**
     * @param WalletIndexV2RequestURLResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return WalletIndexV2RequestURLResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
