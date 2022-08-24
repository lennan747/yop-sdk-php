<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


use Yeepay\Yop\Sdk\Model\BaseRequest;

class SetWithdrawRuleRequest extends BaseRequest
{
    /**
     * @var string
     */
    private $fromMerchantNo;
    /**
     * @var string
     */
    private $tomerchantNo;

    /**
     * Gets fromMerchantNo
     *
     * @return string
     */
    public function getFromMerchantNo()
    {
        return $this->fromMerchantNo;
    }

    /**
     * Sets fromMerchantNo
     *
     * @param string $fromMerchantNo
     * @return SetWithdrawRuleRequest
     */
    public function setFromMerchantNo($fromMerchantNo)
    {
        $this->fromMerchantNo = $fromMerchantNo;
        return $this;
    }
    /**
     * Gets tomerchantNo
     *
     * @return string
     */
    public function getTomerchantNo()
    {
        return $this->tomerchantNo;
    }

    /**
     * Sets tomerchantNo
     *
     * @param string $tomerchantNo
     * @return SetWithdrawRuleRequest
     */
    public function setTomerchantNo($tomerchantNo)
    {
        $this->tomerchantNo = $tomerchantNo;
        return $this;
    }

    public static function getOperationId()
    {
        return 'setWithdrawRule';
    }


}
