<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


use Yeepay\Yop\Sdk\Model\BaseRequest;

class TransferB2cMarketRequest extends BaseRequest
{
    /**
     * @var string
     */
    private $parentMerchantNo;
    /**
     * @var string
     */
    private $fromMerchantNo;
    /**
     * @var string
     */
    private $toMerchantNo;
    /**
     * @var string
     */
    private $toMerchantUserNo;
    /**
     * @var string
     */
    private $requestNo;
    /**
     * @var string
     */
    private $orderAmount;
    /**
     * @var string
     */
    private $feeChargeSide;
    /**
     * @var string
     */
    private $notifyUrl;

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
     * @return TransferB2cMarketRequest
     */
    public function setParentMerchantNo($parentMerchantNo)
    {
        $this->parentMerchantNo = $parentMerchantNo;
        return $this;
    }
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
     * @return TransferB2cMarketRequest
     */
    public function setFromMerchantNo($fromMerchantNo)
    {
        $this->fromMerchantNo = $fromMerchantNo;
        return $this;
    }
    /**
     * Gets toMerchantNo
     *
     * @return string
     */
    public function getToMerchantNo()
    {
        return $this->toMerchantNo;
    }

    /**
     * Sets toMerchantNo
     *
     * @param string $toMerchantNo
     * @return TransferB2cMarketRequest
     */
    public function setToMerchantNo($toMerchantNo)
    {
        $this->toMerchantNo = $toMerchantNo;
        return $this;
    }
    /**
     * Gets toMerchantUserNo
     *
     * @return string
     */
    public function getToMerchantUserNo()
    {
        return $this->toMerchantUserNo;
    }

    /**
     * Sets toMerchantUserNo
     *
     * @param string $toMerchantUserNo
     * @return TransferB2cMarketRequest
     */
    public function setToMerchantUserNo($toMerchantUserNo)
    {
        $this->toMerchantUserNo = $toMerchantUserNo;
        return $this;
    }
    /**
     * Gets requestNo
     *
     * @return string
     */
    public function getRequestNo()
    {
        return $this->requestNo;
    }

    /**
     * Sets requestNo
     *
     * @param string $requestNo
     * @return TransferB2cMarketRequest
     */
    public function setRequestNo($requestNo)
    {
        $this->requestNo = $requestNo;
        return $this;
    }
    /**
     * Gets orderAmount
     *
     * @return string
     */
    public function getOrderAmount()
    {
        return $this->orderAmount;
    }

    /**
     * Sets orderAmount
     *
     * @param string $orderAmount
     * @return TransferB2cMarketRequest
     */
    public function setOrderAmount($orderAmount)
    {
        $this->orderAmount = $orderAmount;
        return $this;
    }
    /**
     * Gets feeChargeSide
     *
     * @return string
     */
    public function getFeeChargeSide()
    {
        return $this->feeChargeSide;
    }

    /**
     * Sets feeChargeSide
     *
     * @param string $feeChargeSide
     * @return TransferB2cMarketRequest
     */
    public function setFeeChargeSide($feeChargeSide)
    {
        $this->feeChargeSide = $feeChargeSide;
        return $this;
    }
    /**
     * Gets notifyUrl
     *
     * @return string
     */
    public function getNotifyUrl()
    {
        return $this->notifyUrl;
    }

    /**
     * Sets notifyUrl
     *
     * @param string $notifyUrl
     * @return TransferB2cMarketRequest
     */
    public function setNotifyUrl($notifyUrl)
    {
        $this->notifyUrl = $notifyUrl;
        return $this;
    }

    public static function getOperationId()
    {
        return 'transferB2cMarket';
    }


}
