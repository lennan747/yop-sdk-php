<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class PasswordManageResponse extends BaseResponse
{
    /**
     * @var PasswordManageRequestURLResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\MWallet\Model\PasswordManageRequestURLResponseDTOResult';
    }

    /**
     * @param PasswordManageRequestURLResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return PasswordManageRequestURLResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
