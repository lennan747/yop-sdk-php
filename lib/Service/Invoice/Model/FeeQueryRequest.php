<?php


namespace Yeepay\Yop\Sdk\Service\Invoice\Model;


use Yeepay\Yop\Sdk\Model\BaseRequest;

class FeeQueryRequest extends BaseRequest
{
    /**
     * @var string
     */
    private $merchantNo;
    /**
     * @var string
     */
    private $parentMerchantNo;
    /**
     * @var string
     */
    private $chargingDateStart;
    /**
     * @var string
     */
    private $chargingDateEnd;

    /**
     * Gets merchantNo
     *
     * @return string
     */
    public function getMerchantNo()
    {
        return $this->merchantNo;
    }

    /**
     * Sets merchantNo
     *
     * @param string $merchantNo
     * @return FeeQueryRequest
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }
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
     * @return FeeQueryRequest
     */
    public function setParentMerchantNo($parentMerchantNo)
    {
        $this->parentMerchantNo = $parentMerchantNo;
        return $this;
    }
    /**
     * Gets chargingDateStart
     *
     * @return string
     */
    public function getChargingDateStart()
    {
        return $this->chargingDateStart;
    }

    /**
     * Sets chargingDateStart
     *
     * @param string $chargingDateStart
     * @return FeeQueryRequest
     */
    public function setChargingDateStart($chargingDateStart)
    {
        $this->chargingDateStart = $chargingDateStart;
        return $this;
    }
    /**
     * Gets chargingDateEnd
     *
     * @return string
     */
    public function getChargingDateEnd()
    {
        return $this->chargingDateEnd;
    }

    /**
     * Sets chargingDateEnd
     *
     * @param string $chargingDateEnd
     * @return FeeQueryRequest
     */
    public function setChargingDateEnd($chargingDateEnd)
    {
        $this->chargingDateEnd = $chargingDateEnd;
        return $this;
    }

    public static function getOperationId()
    {
        return 'feeQuery';
    }


}
