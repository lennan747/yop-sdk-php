<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class AccountinfosQueryResponse extends BaseResponse
{
    /**
     * @var AccountinfosQueryQueryAccountInfoListRespDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\AccountinfosQueryQueryAccountInfoListRespDTOResult';
    }

    /**
     * @param AccountinfosQueryQueryAccountInfoListRespDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return AccountinfosQueryQueryAccountInfoListRespDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
