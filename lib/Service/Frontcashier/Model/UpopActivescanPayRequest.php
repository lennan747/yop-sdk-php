<?php


namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;


use Yeepay\Yop\Sdk\Model\BaseRequest;

class UpopActivescanPayRequest extends BaseRequest
{
    /**
     * @var string
     */
    private $merchantNo;
    /**
     * @var string
     */
    private $merchantFlowId;
    /**
     * @var string
     */
    private $paySerialNo;
    /**
     * @var string
     */
    private $couponSerialNo;
    /**
     * @var float
     */
    private $tradeAmount;
    /**
     * @var int
     */
    private $bindId;
    /**
     * @var string
     */
    private $userNo;
    /**
     * @var string
     */
    private $userType;
    /**
     * @var string
     */
    private $callBackUrl;
    /**
     * @var string
     */
    private $payComments;
    /**
     * @var string
     */
    private $deviceID;
    /**
     * @var string
     */
    private $deviceType;
    /**
     * @var string
     */
    private $accountIDHash;
    /**
     * @var string
     */
    private $sourceIP;
    /**
     * @var string
     */
    private $usrRgstrDt;
    /**
     * @var string
     */
    private $accountEmailLife;
    /**
     * @var string
     */
    private $deviceLocation;
    /**
     * @var string
     */
    private $fullDeviceNumber;
    /**
     * @var string
     */
    private $captureMethod;
    /**
     * @var string
     */
    private $deviceSimNumber;
    /**
     * @var string
     */
    private $deviceName;

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
     * @return UpopActivescanPayRequest
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }
    /**
     * Gets merchantFlowId
     *
     * @return string
     */
    public function getMerchantFlowId()
    {
        return $this->merchantFlowId;
    }

    /**
     * Sets merchantFlowId
     *
     * @param string $merchantFlowId
     * @return UpopActivescanPayRequest
     */
    public function setMerchantFlowId($merchantFlowId)
    {
        $this->merchantFlowId = $merchantFlowId;
        return $this;
    }
    /**
     * Gets paySerialNo
     *
     * @return string
     */
    public function getPaySerialNo()
    {
        return $this->paySerialNo;
    }

    /**
     * Sets paySerialNo
     *
     * @param string $paySerialNo
     * @return UpopActivescanPayRequest
     */
    public function setPaySerialNo($paySerialNo)
    {
        $this->paySerialNo = $paySerialNo;
        return $this;
    }
    /**
     * Gets couponSerialNo
     *
     * @return string
     */
    public function getCouponSerialNo()
    {
        return $this->couponSerialNo;
    }

    /**
     * Sets couponSerialNo
     *
     * @param string $couponSerialNo
     * @return UpopActivescanPayRequest
     */
    public function setCouponSerialNo($couponSerialNo)
    {
        $this->couponSerialNo = $couponSerialNo;
        return $this;
    }
    /**
     * Gets tradeAmount
     *
     * @return float
     */
    public function getTradeAmount()
    {
        return $this->tradeAmount;
    }

    /**
     * Sets tradeAmount
     *
     * @param float $tradeAmount
     * @return UpopActivescanPayRequest
     */
    public function setTradeAmount($tradeAmount)
    {
        $this->tradeAmount = $tradeAmount;
        return $this;
    }
    /**
     * Gets bindId
     *
     * @return int
     */
    public function getBindId()
    {
        return $this->bindId;
    }

    /**
     * Sets bindId
     *
     * @param int $bindId
     * @return UpopActivescanPayRequest
     */
    public function setBindId($bindId)
    {
        $this->bindId = $bindId;
        return $this;
    }
    /**
     * Gets userNo
     *
     * @return string
     */
    public function getUserNo()
    {
        return $this->userNo;
    }

    /**
     * Sets userNo
     *
     * @param string $userNo
     * @return UpopActivescanPayRequest
     */
    public function setUserNo($userNo)
    {
        $this->userNo = $userNo;
        return $this;
    }
    /**
     * Gets userType
     *
     * @return string
     */
    public function getUserType()
    {
        return $this->userType;
    }

    /**
     * Sets userType
     *
     * @param string $userType
     * @return UpopActivescanPayRequest
     */
    public function setUserType($userType)
    {
        $this->userType = $userType;
        return $this;
    }
    /**
     * Gets callBackUrl
     *
     * @return string
     */
    public function getCallBackUrl()
    {
        return $this->callBackUrl;
    }

    /**
     * Sets callBackUrl
     *
     * @param string $callBackUrl
     * @return UpopActivescanPayRequest
     */
    public function setCallBackUrl($callBackUrl)
    {
        $this->callBackUrl = $callBackUrl;
        return $this;
    }
    /**
     * Gets payComments
     *
     * @return string
     */
    public function getPayComments()
    {
        return $this->payComments;
    }

    /**
     * Sets payComments
     *
     * @param string $payComments
     * @return UpopActivescanPayRequest
     */
    public function setPayComments($payComments)
    {
        $this->payComments = $payComments;
        return $this;
    }
    /**
     * Gets deviceID
     *
     * @return string
     */
    public function getDeviceID()
    {
        return $this->deviceID;
    }

    /**
     * Sets deviceID
     *
     * @param string $deviceID
     * @return UpopActivescanPayRequest
     */
    public function setDeviceID($deviceID)
    {
        $this->deviceID = $deviceID;
        return $this;
    }
    /**
     * Gets deviceType
     *
     * @return string
     */
    public function getDeviceType()
    {
        return $this->deviceType;
    }

    /**
     * Sets deviceType
     *
     * @param string $deviceType
     * @return UpopActivescanPayRequest
     */
    public function setDeviceType($deviceType)
    {
        $this->deviceType = $deviceType;
        return $this;
    }
    /**
     * Gets accountIDHash
     *
     * @return string
     */
    public function getAccountIDHash()
    {
        return $this->accountIDHash;
    }

    /**
     * Sets accountIDHash
     *
     * @param string $accountIDHash
     * @return UpopActivescanPayRequest
     */
    public function setAccountIDHash($accountIDHash)
    {
        $this->accountIDHash = $accountIDHash;
        return $this;
    }
    /**
     * Gets sourceIP
     *
     * @return string
     */
    public function getSourceIP()
    {
        return $this->sourceIP;
    }

    /**
     * Sets sourceIP
     *
     * @param string $sourceIP
     * @return UpopActivescanPayRequest
     */
    public function setSourceIP($sourceIP)
    {
        $this->sourceIP = $sourceIP;
        return $this;
    }
    /**
     * Gets usrRgstrDt
     *
     * @return string
     */
    public function getUsrRgstrDt()
    {
        return $this->usrRgstrDt;
    }

    /**
     * Sets usrRgstrDt
     *
     * @param string $usrRgstrDt
     * @return UpopActivescanPayRequest
     */
    public function setUsrRgstrDt($usrRgstrDt)
    {
        $this->usrRgstrDt = $usrRgstrDt;
        return $this;
    }
    /**
     * Gets accountEmailLife
     *
     * @return string
     */
    public function getAccountEmailLife()
    {
        return $this->accountEmailLife;
    }

    /**
     * Sets accountEmailLife
     *
     * @param string $accountEmailLife
     * @return UpopActivescanPayRequest
     */
    public function setAccountEmailLife($accountEmailLife)
    {
        $this->accountEmailLife = $accountEmailLife;
        return $this;
    }
    /**
     * Gets deviceLocation
     *
     * @return string
     */
    public function getDeviceLocation()
    {
        return $this->deviceLocation;
    }

    /**
     * Sets deviceLocation
     *
     * @param string $deviceLocation
     * @return UpopActivescanPayRequest
     */
    public function setDeviceLocation($deviceLocation)
    {
        $this->deviceLocation = $deviceLocation;
        return $this;
    }
    /**
     * Gets fullDeviceNumber
     *
     * @return string
     */
    public function getFullDeviceNumber()
    {
        return $this->fullDeviceNumber;
    }

    /**
     * Sets fullDeviceNumber
     *
     * @param string $fullDeviceNumber
     * @return UpopActivescanPayRequest
     */
    public function setFullDeviceNumber($fullDeviceNumber)
    {
        $this->fullDeviceNumber = $fullDeviceNumber;
        return $this;
    }
    /**
     * Gets captureMethod
     *
     * @return string
     */
    public function getCaptureMethod()
    {
        return $this->captureMethod;
    }

    /**
     * Sets captureMethod
     *
     * @param string $captureMethod
     * @return UpopActivescanPayRequest
     */
    public function setCaptureMethod($captureMethod)
    {
        $this->captureMethod = $captureMethod;
        return $this;
    }
    /**
     * Gets deviceSimNumber
     *
     * @return string
     */
    public function getDeviceSimNumber()
    {
        return $this->deviceSimNumber;
    }

    /**
     * Sets deviceSimNumber
     *
     * @param string $deviceSimNumber
     * @return UpopActivescanPayRequest
     */
    public function setDeviceSimNumber($deviceSimNumber)
    {
        $this->deviceSimNumber = $deviceSimNumber;
        return $this;
    }
    /**
     * Gets deviceName
     *
     * @return string
     */
    public function getDeviceName()
    {
        return $this->deviceName;
    }

    /**
     * Sets deviceName
     *
     * @param string $deviceName
     * @return UpopActivescanPayRequest
     */
    public function setDeviceName($deviceName)
    {
        $this->deviceName = $deviceName;
        return $this;
    }

    public static function getOperationId()
    {
        return 'upopActivescanPay';
    }


}
