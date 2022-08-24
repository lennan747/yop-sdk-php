<?php
/**
 * TransferB2cQueryQueryMGB2CResponseDTOResult
 *
 * PHP version 5
 *
 * @category Class
 * @package  Yeepay\Yop\Sdk\
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * 会员钱包
 *
 * <p>中台会员钱包</p>
 *
 * OpenAPI spec version: 1.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.13
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Yeepay\Yop\Sdk\Service\MWallet\Model;

use \ArrayAccess;
use Yeepay\Yop\Sdk\Model\ModelInterface;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;

/**
 * TransferB2cQueryQueryMGB2CResponseDTOResult Class Doc Comment
 *
 * @category Class
 * @package  Yeepay\Yop\Sdk\
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TransferB2cQueryQueryMGB2CResponseDTOResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TransferB2cQueryQueryMGB2CResponseDTOResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'code' => 'string',
        'message' => 'string',
        'requestNo' => 'string',
        'businessNo' => 'string',
        'orderAmount' => 'float',
        'orderStatus' => 'string',
        'fromMerchantNo' => 'string',
        'toMerchantNo' => 'string',
        'toMemberNo' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'code' => null,
        'message' => null,
        'requestNo' => null,
        'businessNo' => null,
        'orderAmount' => null,
        'orderStatus' => null,
        'fromMerchantNo' => null,
        'toMerchantNo' => null,
        'toMemberNo' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'code' => 'code',
        'message' => 'message',
        'requestNo' => 'requestNo',
        'businessNo' => 'businessNo',
        'orderAmount' => 'orderAmount',
        'orderStatus' => 'orderStatus',
        'fromMerchantNo' => 'fromMerchantNo',
        'toMerchantNo' => 'toMerchantNo',
        'toMemberNo' => 'toMemberNo'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'code' => 'setCode',
        'message' => 'setMessage',
        'requestNo' => 'setRequestNo',
        'businessNo' => 'setBusinessNo',
        'orderAmount' => 'setOrderAmount',
        'orderStatus' => 'setOrderStatus',
        'fromMerchantNo' => 'setFromMerchantNo',
        'toMerchantNo' => 'setToMerchantNo',
        'toMemberNo' => 'setToMemberNo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'code' => 'getCode',
        'message' => 'getMessage',
        'requestNo' => 'getRequestNo',
        'businessNo' => 'getBusinessNo',
        'orderAmount' => 'getOrderAmount',
        'orderStatus' => 'getOrderStatus',
        'fromMerchantNo' => 'getFromMerchantNo',
        'toMerchantNo' => 'getToMerchantNo',
        'toMemberNo' => 'getToMemberNo'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['requestNo'] = isset($data['requestNo']) ? $data['requestNo'] : null;
        $this->container['businessNo'] = isset($data['businessNo']) ? $data['businessNo'] : null;
        $this->container['orderAmount'] = isset($data['orderAmount']) ? $data['orderAmount'] : null;
        $this->container['orderStatus'] = isset($data['orderStatus']) ? $data['orderStatus'] : null;
        $this->container['fromMerchantNo'] = isset($data['fromMerchantNo']) ? $data['fromMerchantNo'] : null;
        $this->container['toMerchantNo'] = isset($data['toMerchantNo']) ? $data['toMerchantNo'] : null;
        $this->container['toMemberNo'] = isset($data['toMemberNo']) ? $data['toMemberNo'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string $code 返回码
     *
     * @return $this
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string $message 返回信息
     *
     * @return $this
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets requestNo
     *
     * @return string
     */
    public function getRequestNo()
    {
        return $this->container['requestNo'];
    }

    /**
     * Sets requestNo
     *
     * @param string $requestNo 商户请求号
     *
     * @return $this
     */
    public function setRequestNo($requestNo)
    {
        $this->container['requestNo'] = $requestNo;

        return $this;
    }

    /**
     * Gets businessNo
     *
     * @return string
     */
    public function getBusinessNo()
    {
        return $this->container['businessNo'];
    }

    /**
     * Sets businessNo
     *
     * @param string $businessNo 易宝订单号
     *
     * @return $this
     */
    public function setBusinessNo($businessNo)
    {
        $this->container['businessNo'] = $businessNo;

        return $this;
    }

    /**
     * Gets orderAmount
     *
     * @return float
     */
    public function getOrderAmount()
    {
        return $this->container['orderAmount'];
    }

    /**
     * Sets orderAmount
     *
     * @param float $orderAmount 转账订单金额
     *
     * @return $this
     */
    public function setOrderAmount($orderAmount)
    {
        $this->container['orderAmount'] = $orderAmount;

        return $this;
    }

    /**
     * Gets orderStatus
     *
     * @return string
     */
    public function getOrderStatus()
    {
        return $this->container['orderStatus'];
    }

    /**
     * Sets orderStatus
     *
     * @param string $orderStatus 转账订单状态
     *
     * @return $this
     */
    public function setOrderStatus($orderStatus)
    {
        $this->container['orderStatus'] = $orderStatus;

        return $this;
    }

    /**
     * Gets fromMerchantNo
     *
     * @return string
     */
    public function getFromMerchantNo()
    {
        return $this->container['fromMerchantNo'];
    }

    /**
     * Sets fromMerchantNo
     *
     * @param string $fromMerchantNo 交易主体商编
     *
     * @return $this
     */
    public function setFromMerchantNo($fromMerchantNo)
    {
        $this->container['fromMerchantNo'] = $fromMerchantNo;

        return $this;
    }

    /**
     * Gets toMerchantNo
     *
     * @return string
     */
    public function getToMerchantNo()
    {
        return $this->container['toMerchantNo'];
    }

    /**
     * Sets toMerchantNo
     *
     * @param string $toMerchantNo 转帐接收方平台商编
     *
     * @return $this
     */
    public function setToMerchantNo($toMerchantNo)
    {
        $this->container['toMerchantNo'] = $toMerchantNo;

        return $this;
    }

    /**
     * Gets toMemberNo
     *
     * @return string
     */
    public function getToMemberNo()
    {
        return $this->container['toMemberNo'];
    }

    /**
     * Sets toMemberNo
     *
     * @param string $toMemberNo 转出方易宝用户编号
     *
     * @return $this
     */
    public function setToMemberNo($toMemberNo)
    {
        $this->container['toMemberNo'] = $toMemberNo;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

