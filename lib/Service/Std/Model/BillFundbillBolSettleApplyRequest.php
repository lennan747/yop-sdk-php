<?php


namespace Yeepay\Yop\Sdk\Service\Std\Model;


use Yeepay\Yop\Sdk\Model\BaseRequest;

class BillFundbillBolSettleApplyRequest extends BaseRequest
{
    /**
     * @var string
     */
    private $tradeDate;
    /**
     * @var string
     */
    private $merchantNo;
    /**
     * @var string
     */
    private $notifyUrl;
    /**
     * @var string
     */
    private $subMerchantNo;

    /**
     * Gets tradeDate
     *
     * @return string
     */
    public function getTradeDate()
    {
        return $this->tradeDate;
    }

    /**
     * Sets tradeDate
     *
     * @param string $tradeDate
     * @return BillFundbillBolSettleApplyRequest
     */
    public function setTradeDate($tradeDate)
    {
        $this->tradeDate = $tradeDate;
        return $this;
    }
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
     * @return BillFundbillBolSettleApplyRequest
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
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
     * @return BillFundbillBolSettleApplyRequest
     */
    public function setNotifyUrl($notifyUrl)
    {
        $this->notifyUrl = $notifyUrl;
        return $this;
    }
    /**
     * Gets subMerchantNo
     *
     * @return string
     */
    public function getSubMerchantNo()
    {
        return $this->subMerchantNo;
    }

    /**
     * Sets subMerchantNo
     *
     * @param string $subMerchantNo
     * @return BillFundbillBolSettleApplyRequest
     */
    public function setSubMerchantNo($subMerchantNo)
    {
        $this->subMerchantNo = $subMerchantNo;
        return $this;
    }

    public static function getOperationId()
    {
        return 'billFundbillBolSettleApply';
    }


}
