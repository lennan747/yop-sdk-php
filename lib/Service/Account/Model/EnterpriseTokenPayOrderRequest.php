<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


use Yeepay\Yop\Sdk\Model\BaseRequest;

class EnterpriseTokenPayOrderRequest extends BaseRequest
{
    /**
     * @var string
     */
    private $parentMerchantNo;
    /**
     * @var string
     */
    private $token;
    /**
     * @var string
     */
    private $payerMerchantNo;

    /**
     * Gets parentMerchantNo
     *
     * @return string
     */
    public function getParentMerchantNo()
    {
        return $this->parentMerchantNo;
    }

    /**
     * Sets parentMerchantNo
     *
     * @param string $parentMerchantNo
     * @return EnterpriseTokenPayOrderRequest
     */
    public function setParentMerchantNo($parentMerchantNo)
    {
        $this->parentMerchantNo = $parentMerchantNo;
        return $this;
    }
    /**
     * Gets token
     *
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Sets token
     *
     * @param string $token
     * @return EnterpriseTokenPayOrderRequest
     */
    public function setToken($token)
    {
        $this->token = $token;
        return $this;
    }
    /**
     * Gets payerMerchantNo
     *
     * @return string
     */
    public function getPayerMerchantNo()
    {
        return $this->payerMerchantNo;
    }

    /**
     * Sets payerMerchantNo
     *
     * @param string $payerMerchantNo
     * @return EnterpriseTokenPayOrderRequest
     */
    public function setPayerMerchantNo($payerMerchantNo)
    {
        $this->payerMerchantNo = $payerMerchantNo;
        return $this;
    }

    public static function getOperationId()
    {
        return 'enterpriseTokenPayOrder';
    }


}
