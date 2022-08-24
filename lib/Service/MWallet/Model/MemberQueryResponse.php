<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class MemberQueryResponse extends BaseResponse
{
    /**
     * @var MemberQueryQueryMemberInfoResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\MWallet\Model\MemberQueryQueryMemberInfoResponseDTOResult';
    }

    /**
     * @param MemberQueryQueryMemberInfoResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return MemberQueryQueryMemberInfoResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
