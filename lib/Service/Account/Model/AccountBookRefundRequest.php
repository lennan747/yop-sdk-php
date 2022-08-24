<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


use Yeepay\Yop\Sdk\Model\BaseRequest;

class AccountBookRefundRequest extends BaseRequest
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
    private $merchantRefundRequestNo;
    /**
     * @var string
     */
    private $originalOrderNo;
    /**
     * @var float
     */
    private $refundAmount;
    /**
     * @var string
     */
    private $bankPostscrip;
    /**
     * @var string
     */
    private $notifyUrl;

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
     * @return AccountBookRefundRequest
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
     * @return AccountBookRefundRequest
     */
    public function setParentMerchantNo($parentMerchantNo)
    {
        $this->parentMerchantNo = $parentMerchantNo;
        return $this;
    }
    /**
     * Gets merchantRefundRequestNo
     *
     * @return string
     */
    public function getMerchantRefundRequestNo()
    {
        return $this->merchantRefundRequestNo;
    }

    /**
     * Sets merchantRefundRequestNo
     *
     * @param string $merchantRefundRequestNo
     * @return AccountBookRefundRequest
     */
    public function setMerchantRefundRequestNo($merchantRefundRequestNo)
    {
        $this->merchantRefundRequestNo = $merchantRefundRequestNo;
        return $this;
    }
    /**
     * Gets originalOrderNo
     *
     * @return string
     */
    public function getOriginalOrderNo()
    {
        return $this->originalOrderNo;
    }

    /**
     * Sets originalOrderNo
     *
     * @param string $originalOrderNo
     * @return AccountBookRefundRequest
     */
    public function setOriginalOrderNo($originalOrderNo)
    {
        $this->originalOrderNo = $originalOrderNo;
        return $this;
    }
    /**
     * Gets refundAmount
     *
     * @return float
     */
    public function getRefundAmount()
    {
        return $this->refundAmount;
    }

    /**
     * Sets refundAmount
     *
     * @param float $refundAmount
     * @return AccountBookRefundRequest
     */
    public function setRefundAmount($refundAmount)
    {
        $this->refundAmount = $refundAmount;
        return $this;
    }
    /**
     * Gets bankPostscrip
     *
     * @return string
     */
    public function getBankPostscrip()
    {
        return $this->bankPostscrip;
    }

    /**
     * Sets bankPostscrip
     *
     * @param string $bankPostscrip
     * @return AccountBookRefundRequest
     */
    public function setBankPostscrip($bankPostscrip)
    {
        $this->bankPostscrip = $bankPostscrip;
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
     * @return AccountBookRefundRequest
     */
    public function setNotifyUrl($notifyUrl)
    {
        $this->notifyUrl = $notifyUrl;
        return $this;
    }

    public static function getOperationId()
    {
        return 'accountBookRefund';
    }


}
