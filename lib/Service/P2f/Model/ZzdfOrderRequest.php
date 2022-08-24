<?php


namespace Yeepay\Yop\Sdk\Service\P2f\Model;


use Yeepay\Yop\Sdk\Model\BaseRequest;

class ZzdfOrderRequest extends BaseRequest
{
    /**
     * @var string
     */
    private $parentMerchantNo;
    /**
     * @var string
     */
    private $merchantNo;
    /**
     * @var string
     */
    private $requestNo;
    /**
     * @var float
     */
    private $orderAmount;
    /**
     * @var string
     */
    private $receiverAccountNo;
    /**
     * @var string
     */
    private $receiverAccountName;
    /**
     * @var string
     */
    private $receiverBankCode;
    /**
     * @var string
     */
    private $province;
    /**
     * @var string
     */
    private $city;
    /**
     * @var string
     */
    private $branchBankCode;
    /**
     * @var string
     */
    private $bankAccountType;
    /**
     * @var string
     */
    private $comments;
    /**
     * @var string
     */
    private $feeChargeSide;
    /**
     * @var string
     */
    private $terminalType;
    /**
     * @var string
     */
    private $receiveType;
    /**
     * @var string
     */
    private $notifyUrl;
    /**
     * @var string
     */
    private $remark;
    /**
     * @var string
     */
    private $rechargeAcctType;
    /**
     * @var string
     */
    private $rechargeRemark;
    /**
     * @var string
     */
    private $rechargeFeeType;
    /**
     * @var string
     */
    private $rechargeBankCode;
    /**
     * @var string
     */
    private $rechargeBankCardNo;

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
     * @return ZzdfOrderRequest
     */
    public function setParentMerchantNo($parentMerchantNo)
    {
        $this->parentMerchantNo = $parentMerchantNo;
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
     * @return ZzdfOrderRequest
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
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
     * @return ZzdfOrderRequest
     */
    public function setRequestNo($requestNo)
    {
        $this->requestNo = $requestNo;
        return $this;
    }
    /**
     * Gets orderAmount
     *
     * @return float
     */
    public function getOrderAmount()
    {
        return $this->orderAmount;
    }

    /**
     * Sets orderAmount
     *
     * @param float $orderAmount
     * @return ZzdfOrderRequest
     */
    public function setOrderAmount($orderAmount)
    {
        $this->orderAmount = $orderAmount;
        return $this;
    }
    /**
     * Gets receiverAccountNo
     *
     * @return string
     */
    public function getReceiverAccountNo()
    {
        return $this->receiverAccountNo;
    }

    /**
     * Sets receiverAccountNo
     *
     * @param string $receiverAccountNo
     * @return ZzdfOrderRequest
     */
    public function setReceiverAccountNo($receiverAccountNo)
    {
        $this->receiverAccountNo = $receiverAccountNo;
        return $this;
    }
    /**
     * Gets receiverAccountName
     *
     * @return string
     */
    public function getReceiverAccountName()
    {
        return $this->receiverAccountName;
    }

    /**
     * Sets receiverAccountName
     *
     * @param string $receiverAccountName
     * @return ZzdfOrderRequest
     */
    public function setReceiverAccountName($receiverAccountName)
    {
        $this->receiverAccountName = $receiverAccountName;
        return $this;
    }
    /**
     * Gets receiverBankCode
     *
     * @return string
     */
    public function getReceiverBankCode()
    {
        return $this->receiverBankCode;
    }

    /**
     * Sets receiverBankCode
     *
     * @param string $receiverBankCode
     * @return ZzdfOrderRequest
     */
    public function setReceiverBankCode($receiverBankCode)
    {
        $this->receiverBankCode = $receiverBankCode;
        return $this;
    }
    /**
     * Gets province
     *
     * @return string
     */
    public function getProvince()
    {
        return $this->province;
    }

    /**
     * Sets province
     *
     * @param string $province
     * @return ZzdfOrderRequest
     */
    public function setProvince($province)
    {
        $this->province = $province;
        return $this;
    }
    /**
     * Gets city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Sets city
     *
     * @param string $city
     * @return ZzdfOrderRequest
     */
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }
    /**
     * Gets branchBankCode
     *
     * @return string
     */
    public function getBranchBankCode()
    {
        return $this->branchBankCode;
    }

    /**
     * Sets branchBankCode
     *
     * @param string $branchBankCode
     * @return ZzdfOrderRequest
     */
    public function setBranchBankCode($branchBankCode)
    {
        $this->branchBankCode = $branchBankCode;
        return $this;
    }
    /**
     * Gets bankAccountType
     *
     * @return string
     */
    public function getBankAccountType()
    {
        return $this->bankAccountType;
    }

    /**
     * Sets bankAccountType
     *
     * @param string $bankAccountType
     * @return ZzdfOrderRequest
     */
    public function setBankAccountType($bankAccountType)
    {
        $this->bankAccountType = $bankAccountType;
        return $this;
    }
    /**
     * Gets comments
     *
     * @return string
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Sets comments
     *
     * @param string $comments
     * @return ZzdfOrderRequest
     */
    public function setComments($comments)
    {
        $this->comments = $comments;
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
     * @return ZzdfOrderRequest
     */
    public function setFeeChargeSide($feeChargeSide)
    {
        $this->feeChargeSide = $feeChargeSide;
        return $this;
    }
    /**
     * Gets terminalType
     *
     * @return string
     */
    public function getTerminalType()
    {
        return $this->terminalType;
    }

    /**
     * Sets terminalType
     *
     * @param string $terminalType
     * @return ZzdfOrderRequest
     */
    public function setTerminalType($terminalType)
    {
        $this->terminalType = $terminalType;
        return $this;
    }
    /**
     * Gets receiveType
     *
     * @return string
     */
    public function getReceiveType()
    {
        return $this->receiveType;
    }

    /**
     * Sets receiveType
     *
     * @param string $receiveType
     * @return ZzdfOrderRequest
     */
    public function setReceiveType($receiveType)
    {
        $this->receiveType = $receiveType;
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
     * @return ZzdfOrderRequest
     */
    public function setNotifyUrl($notifyUrl)
    {
        $this->notifyUrl = $notifyUrl;
        return $this;
    }
    /**
     * Gets remark
     *
     * @return string
     */
    public function getRemark()
    {
        return $this->remark;
    }

    /**
     * Sets remark
     *
     * @param string $remark
     * @return ZzdfOrderRequest
     */
    public function setRemark($remark)
    {
        $this->remark = $remark;
        return $this;
    }
    /**
     * Gets rechargeAcctType
     *
     * @return string
     */
    public function getRechargeAcctType()
    {
        return $this->rechargeAcctType;
    }

    /**
     * Sets rechargeAcctType
     *
     * @param string $rechargeAcctType
     * @return ZzdfOrderRequest
     */
    public function setRechargeAcctType($rechargeAcctType)
    {
        $this->rechargeAcctType = $rechargeAcctType;
        return $this;
    }
    /**
     * Gets rechargeRemark
     *
     * @return string
     */
    public function getRechargeRemark()
    {
        return $this->rechargeRemark;
    }

    /**
     * Sets rechargeRemark
     *
     * @param string $rechargeRemark
     * @return ZzdfOrderRequest
     */
    public function setRechargeRemark($rechargeRemark)
    {
        $this->rechargeRemark = $rechargeRemark;
        return $this;
    }
    /**
     * Gets rechargeFeeType
     *
     * @return string
     */
    public function getRechargeFeeType()
    {
        return $this->rechargeFeeType;
    }

    /**
     * Sets rechargeFeeType
     *
     * @param string $rechargeFeeType
     * @return ZzdfOrderRequest
     */
    public function setRechargeFeeType($rechargeFeeType)
    {
        $this->rechargeFeeType = $rechargeFeeType;
        return $this;
    }
    /**
     * Gets rechargeBankCode
     *
     * @return string
     */
    public function getRechargeBankCode()
    {
        return $this->rechargeBankCode;
    }

    /**
     * Sets rechargeBankCode
     *
     * @param string $rechargeBankCode
     * @return ZzdfOrderRequest
     */
    public function setRechargeBankCode($rechargeBankCode)
    {
        $this->rechargeBankCode = $rechargeBankCode;
        return $this;
    }
    /**
     * Gets rechargeBankCardNo
     *
     * @return string
     */
    public function getRechargeBankCardNo()
    {
        return $this->rechargeBankCardNo;
    }

    /**
     * Sets rechargeBankCardNo
     *
     * @param string $rechargeBankCardNo
     * @return ZzdfOrderRequest
     */
    public function setRechargeBankCardNo($rechargeBankCardNo)
    {
        $this->rechargeBankCardNo = $rechargeBankCardNo;
        return $this;
    }

    public static function getOperationId()
    {
        return 'zzdfOrder';
    }


}
