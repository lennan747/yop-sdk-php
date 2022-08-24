<?php


namespace Yeepay\Yop\Sdk\Service\Std\Model;


use Yeepay\Yop\Sdk\Model\BaseRequest;

class CertOrderRequest extends BaseRequest
{
    /**
     * @var string
     */
    private $merchantNo;
    /**
     * @var string
     */
    private $authType;
    /**
     * @var string
     */
    private $requestNo;
    /**
     * @var string
     */
    private $idCardNo;
    /**
     * @var string
     */
    private $userName;
    /**
     * @var string
     */
    private $bankCardNo;
    /**
     * @var string
     */
    private $requestTime;
    /**
     * @var string
     */
    private $remark;
    /**
     * @var string
     */
    private $mobilePhone;
    /**
     * @var string
     */
    private $idCardType;
    /**
     * @var string
     */
    private $clientSource;
    /**
     * @var string
     */
    private $extMap;

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
     * @return CertOrderRequest
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }
    /**
     * Gets authType
     *
     * @return string
     */
    public function getAuthType()
    {
        return $this->authType;
    }

    /**
     * Sets authType
     *
     * @param string $authType
     * @return CertOrderRequest
     */
    public function setAuthType($authType)
    {
        $this->authType = $authType;
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
     * @return CertOrderRequest
     */
    public function setRequestNo($requestNo)
    {
        $this->requestNo = $requestNo;
        return $this;
    }
    /**
     * Gets idCardNo
     *
     * @return string
     */
    public function getIdCardNo()
    {
        return $this->idCardNo;
    }

    /**
     * Sets idCardNo
     *
     * @param string $idCardNo
     * @return CertOrderRequest
     */
    public function setIdCardNo($idCardNo)
    {
        $this->idCardNo = $idCardNo;
        return $this;
    }
    /**
     * Gets userName
     *
     * @return string
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * Sets userName
     *
     * @param string $userName
     * @return CertOrderRequest
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;
        return $this;
    }
    /**
     * Gets bankCardNo
     *
     * @return string
     */
    public function getBankCardNo()
    {
        return $this->bankCardNo;
    }

    /**
     * Sets bankCardNo
     *
     * @param string $bankCardNo
     * @return CertOrderRequest
     */
    public function setBankCardNo($bankCardNo)
    {
        $this->bankCardNo = $bankCardNo;
        return $this;
    }
    /**
     * Gets requestTime
     *
     * @return string
     */
    public function getRequestTime()
    {
        return $this->requestTime;
    }

    /**
     * Sets requestTime
     *
     * @param string $requestTime
     * @return CertOrderRequest
     */
    public function setRequestTime($requestTime)
    {
        $this->requestTime = $requestTime;
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
     * @return CertOrderRequest
     */
    public function setRemark($remark)
    {
        $this->remark = $remark;
        return $this;
    }
    /**
     * Gets mobilePhone
     *
     * @return string
     */
    public function getMobilePhone()
    {
        return $this->mobilePhone;
    }

    /**
     * Sets mobilePhone
     *
     * @param string $mobilePhone
     * @return CertOrderRequest
     */
    public function setMobilePhone($mobilePhone)
    {
        $this->mobilePhone = $mobilePhone;
        return $this;
    }
    /**
     * Gets idCardType
     *
     * @return string
     */
    public function getIdCardType()
    {
        return $this->idCardType;
    }

    /**
     * Sets idCardType
     *
     * @param string $idCardType
     * @return CertOrderRequest
     */
    public function setIdCardType($idCardType)
    {
        $this->idCardType = $idCardType;
        return $this;
    }
    /**
     * Gets clientSource
     *
     * @return string
     */
    public function getClientSource()
    {
        return $this->clientSource;
    }

    /**
     * Sets clientSource
     *
     * @param string $clientSource
     * @return CertOrderRequest
     */
    public function setClientSource($clientSource)
    {
        $this->clientSource = $clientSource;
        return $this;
    }
    /**
     * Gets extMap
     *
     * @return string
     */
    public function getExtMap()
    {
        return $this->extMap;
    }

    /**
     * Sets extMap
     *
     * @param string $extMap
     * @return CertOrderRequest
     */
    public function setExtMap($extMap)
    {
        $this->extMap = $extMap;
        return $this;
    }

    public static function getOperationId()
    {
        return 'certOrder';
    }


}
