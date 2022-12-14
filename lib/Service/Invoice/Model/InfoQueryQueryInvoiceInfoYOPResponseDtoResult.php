<?php
/**
 * InfoQueryQueryInvoiceInfoYOPResponseDtoResult
 *
 * PHP version 5
 *
 * @category Class
 * @package  Yeepay\Yop\Sdk\
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * 发票服务
 *
 * <p>基于中台商户实际开票场景，提供给商户维护开票规则、票面信息，查询票面信息，申请开具手续费发票，查询开票记录，查询实收手续费金额的服务</p>
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

namespace Yeepay\Yop\Sdk\Service\Invoice\Model;

use \ArrayAccess;
use Yeepay\Yop\Sdk\Model\ModelInterface;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;

/**
 * InfoQueryQueryInvoiceInfoYOPResponseDtoResult Class Doc Comment
 *
 * @category Class
 * @package  Yeepay\Yop\Sdk\
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InfoQueryQueryInvoiceInfoYOPResponseDtoResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'InfoQueryQueryInvoiceInfoYOPResponseDtoResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'code' => 'string',
        'message' => 'string',
        'merchantNo' => 'string',
        'mode' => 'string',
        'invoiceType' => 'string',
        'invoiceForm' => 'string',
        'linkman' => 'string',
        'linkmanPhone' => 'string',
        'postalAddress' => 'string',
        'postalCode' => 'string',
        'invoiceName' => 'string',
        'taxpayerId' => 'string',
        'invoicePhone' => 'string',
        'invoiceAddress' => 'string',
        'bankName' => 'string',
        'accountNo' => 'string',
        'email' => 'string',
        'needInvoice' => 'string',
        'createTime' => 'string',
        'lastModifyTime' => 'string',
        'remark' => 'string',
        'standardType' => 'string',
        'unit' => 'string',
        'quantity' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'code' => null,
        'message' => null,
        'merchantNo' => null,
        'mode' => null,
        'invoiceType' => null,
        'invoiceForm' => null,
        'linkman' => null,
        'linkmanPhone' => null,
        'postalAddress' => null,
        'postalCode' => null,
        'invoiceName' => null,
        'taxpayerId' => null,
        'invoicePhone' => null,
        'invoiceAddress' => null,
        'bankName' => null,
        'accountNo' => null,
        'email' => null,
        'needInvoice' => null,
        'createTime' => 'date-time',
        'lastModifyTime' => 'date-time',
        'remark' => null,
        'standardType' => null,
        'unit' => null,
        'quantity' => 'int32'
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
        'merchantNo' => 'merchantNo',
        'mode' => 'mode',
        'invoiceType' => 'invoiceType',
        'invoiceForm' => 'invoiceForm',
        'linkman' => 'linkman',
        'linkmanPhone' => 'linkmanPhone',
        'postalAddress' => 'postalAddress',
        'postalCode' => 'postalCode',
        'invoiceName' => 'invoiceName',
        'taxpayerId' => 'taxpayerId',
        'invoicePhone' => 'invoicePhone',
        'invoiceAddress' => 'invoiceAddress',
        'bankName' => 'bankName',
        'accountNo' => 'accountNo',
        'email' => 'email',
        'needInvoice' => 'needInvoice',
        'createTime' => 'createTime',
        'lastModifyTime' => 'lastModifyTime',
        'remark' => 'remark',
        'standardType' => 'standardType',
        'unit' => 'unit',
        'quantity' => 'quantity'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'code' => 'setCode',
        'message' => 'setMessage',
        'merchantNo' => 'setMerchantNo',
        'mode' => 'setMode',
        'invoiceType' => 'setInvoiceType',
        'invoiceForm' => 'setInvoiceForm',
        'linkman' => 'setLinkman',
        'linkmanPhone' => 'setLinkmanPhone',
        'postalAddress' => 'setPostalAddress',
        'postalCode' => 'setPostalCode',
        'invoiceName' => 'setInvoiceName',
        'taxpayerId' => 'setTaxpayerId',
        'invoicePhone' => 'setInvoicePhone',
        'invoiceAddress' => 'setInvoiceAddress',
        'bankName' => 'setBankName',
        'accountNo' => 'setAccountNo',
        'email' => 'setEmail',
        'needInvoice' => 'setNeedInvoice',
        'createTime' => 'setCreateTime',
        'lastModifyTime' => 'setLastModifyTime',
        'remark' => 'setRemark',
        'standardType' => 'setStandardType',
        'unit' => 'setUnit',
        'quantity' => 'setQuantity'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'code' => 'getCode',
        'message' => 'getMessage',
        'merchantNo' => 'getMerchantNo',
        'mode' => 'getMode',
        'invoiceType' => 'getInvoiceType',
        'invoiceForm' => 'getInvoiceForm',
        'linkman' => 'getLinkman',
        'linkmanPhone' => 'getLinkmanPhone',
        'postalAddress' => 'getPostalAddress',
        'postalCode' => 'getPostalCode',
        'invoiceName' => 'getInvoiceName',
        'taxpayerId' => 'getTaxpayerId',
        'invoicePhone' => 'getInvoicePhone',
        'invoiceAddress' => 'getInvoiceAddress',
        'bankName' => 'getBankName',
        'accountNo' => 'getAccountNo',
        'email' => 'getEmail',
        'needInvoice' => 'getNeedInvoice',
        'createTime' => 'getCreateTime',
        'lastModifyTime' => 'getLastModifyTime',
        'remark' => 'getRemark',
        'standardType' => 'getStandardType',
        'unit' => 'getUnit',
        'quantity' => 'getQuantity'
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
        $this->container['merchantNo'] = isset($data['merchantNo']) ? $data['merchantNo'] : null;
        $this->container['mode'] = isset($data['mode']) ? $data['mode'] : null;
        $this->container['invoiceType'] = isset($data['invoiceType']) ? $data['invoiceType'] : null;
        $this->container['invoiceForm'] = isset($data['invoiceForm']) ? $data['invoiceForm'] : null;
        $this->container['linkman'] = isset($data['linkman']) ? $data['linkman'] : null;
        $this->container['linkmanPhone'] = isset($data['linkmanPhone']) ? $data['linkmanPhone'] : null;
        $this->container['postalAddress'] = isset($data['postalAddress']) ? $data['postalAddress'] : null;
        $this->container['postalCode'] = isset($data['postalCode']) ? $data['postalCode'] : null;
        $this->container['invoiceName'] = isset($data['invoiceName']) ? $data['invoiceName'] : null;
        $this->container['taxpayerId'] = isset($data['taxpayerId']) ? $data['taxpayerId'] : null;
        $this->container['invoicePhone'] = isset($data['invoicePhone']) ? $data['invoicePhone'] : null;
        $this->container['invoiceAddress'] = isset($data['invoiceAddress']) ? $data['invoiceAddress'] : null;
        $this->container['bankName'] = isset($data['bankName']) ? $data['bankName'] : null;
        $this->container['accountNo'] = isset($data['accountNo']) ? $data['accountNo'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['needInvoice'] = isset($data['needInvoice']) ? $data['needInvoice'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['lastModifyTime'] = isset($data['lastModifyTime']) ? $data['lastModifyTime'] : null;
        $this->container['remark'] = isset($data['remark']) ? $data['remark'] : null;
        $this->container['standardType'] = isset($data['standardType']) ? $data['standardType'] : null;
        $this->container['unit'] = isset($data['unit']) ? $data['unit'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
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
     * Gets merchantNo
     *
     * @return string
     */
    public function getMerchantNo()
    {
        return $this->container['merchantNo'];
    }

    /**
     * Sets merchantNo
     *
     * @param string $merchantNo 商编
     *
     * @return $this
     */
    public function setMerchantNo($merchantNo)
    {
        $this->container['merchantNo'] = $merchantNo;

        return $this;
    }

    /**
     * Gets mode
     *
     * @return string
     */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
     * Sets mode
     *
     * @param string $mode 开票方式
     *
     * @return $this
     */
    public function setMode($mode)
    {
        $this->container['mode'] = $mode;

        return $this;
    }

    /**
     * Gets invoiceType
     *
     * @return string
     */
    public function getInvoiceType()
    {
        return $this->container['invoiceType'];
    }

    /**
     * Sets invoiceType
     *
     * @param string $invoiceType 发票类型
     *
     * @return $this
     */
    public function setInvoiceType($invoiceType)
    {
        $this->container['invoiceType'] = $invoiceType;

        return $this;
    }

    /**
     * Gets invoiceForm
     *
     * @return string
     */
    public function getInvoiceForm()
    {
        return $this->container['invoiceForm'];
    }

    /**
     * Sets invoiceForm
     *
     * @param string $invoiceForm 发票形式
     *
     * @return $this
     */
    public function setInvoiceForm($invoiceForm)
    {
        $this->container['invoiceForm'] = $invoiceForm;

        return $this;
    }

    /**
     * Gets linkman
     *
     * @return string
     */
    public function getLinkman()
    {
        return $this->container['linkman'];
    }

    /**
     * Sets linkman
     *
     * @param string $linkman 联系人
     *
     * @return $this
     */
    public function setLinkman($linkman)
    {
        $this->container['linkman'] = $linkman;

        return $this;
    }

    /**
     * Gets linkmanPhone
     *
     * @return string
     */
    public function getLinkmanPhone()
    {
        return $this->container['linkmanPhone'];
    }

    /**
     * Sets linkmanPhone
     *
     * @param string $linkmanPhone 联系人电话
     *
     * @return $this
     */
    public function setLinkmanPhone($linkmanPhone)
    {
        $this->container['linkmanPhone'] = $linkmanPhone;

        return $this;
    }

    /**
     * Gets postalAddress
     *
     * @return string
     */
    public function getPostalAddress()
    {
        return $this->container['postalAddress'];
    }

    /**
     * Sets postalAddress
     *
     * @param string $postalAddress 发票邮寄地址
     *
     * @return $this
     */
    public function setPostalAddress($postalAddress)
    {
        $this->container['postalAddress'] = $postalAddress;

        return $this;
    }

    /**
     * Gets postalCode
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->container['postalCode'];
    }

    /**
     * Sets postalCode
     *
     * @param string $postalCode 邮编
     *
     * @return $this
     */
    public function setPostalCode($postalCode)
    {
        $this->container['postalCode'] = $postalCode;

        return $this;
    }

    /**
     * Gets invoiceName
     *
     * @return string
     */
    public function getInvoiceName()
    {
        return $this->container['invoiceName'];
    }

    /**
     * Sets invoiceName
     *
     * @param string $invoiceName 发票抬头
     *
     * @return $this
     */
    public function setInvoiceName($invoiceName)
    {
        $this->container['invoiceName'] = $invoiceName;

        return $this;
    }

    /**
     * Gets taxpayerId
     *
     * @return string
     */
    public function getTaxpayerId()
    {
        return $this->container['taxpayerId'];
    }

    /**
     * Sets taxpayerId
     *
     * @param string $taxpayerId 纳税人标识
     *
     * @return $this
     */
    public function setTaxpayerId($taxpayerId)
    {
        $this->container['taxpayerId'] = $taxpayerId;

        return $this;
    }

    /**
     * Gets invoicePhone
     *
     * @return string
     */
    public function getInvoicePhone()
    {
        return $this->container['invoicePhone'];
    }

    /**
     * Sets invoicePhone
     *
     * @param string $invoicePhone 开票联系电话
     *
     * @return $this
     */
    public function setInvoicePhone($invoicePhone)
    {
        $this->container['invoicePhone'] = $invoicePhone;

        return $this;
    }

    /**
     * Gets invoiceAddress
     *
     * @return string
     */
    public function getInvoiceAddress()
    {
        return $this->container['invoiceAddress'];
    }

    /**
     * Sets invoiceAddress
     *
     * @param string $invoiceAddress 开票地址
     *
     * @return $this
     */
    public function setInvoiceAddress($invoiceAddress)
    {
        $this->container['invoiceAddress'] = $invoiceAddress;

        return $this;
    }

    /**
     * Gets bankName
     *
     * @return string
     */
    public function getBankName()
    {
        return $this->container['bankName'];
    }

    /**
     * Sets bankName
     *
     * @param string $bankName 开户银行名称
     *
     * @return $this
     */
    public function setBankName($bankName)
    {
        $this->container['bankName'] = $bankName;

        return $this;
    }

    /**
     * Gets accountNo
     *
     * @return string
     */
    public function getAccountNo()
    {
        return $this->container['accountNo'];
    }

    /**
     * Sets accountNo
     *
     * @param string $accountNo 账号信息
     *
     * @return $this
     */
    public function setAccountNo($accountNo)
    {
        $this->container['accountNo'] = $accountNo;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email 邮箱
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets needInvoice
     *
     * @return string
     */
    public function getNeedInvoice()
    {
        return $this->container['needInvoice'];
    }

    /**
     * Sets needInvoice
     *
     * @param string $needInvoice 是否需要发票
     *
     * @return $this
     */
    public function setNeedInvoice($needInvoice)
    {
        $this->container['needInvoice'] = $needInvoice;

        return $this;
    }

    /**
     * Gets createTime
     *
     * @return string
     */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
     * Sets createTime
     *
     * @param string $createTime 创建时间
     *
     * @return $this
     */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;

        return $this;
    }

    /**
     * Gets lastModifyTime
     *
     * @return string
     */
    public function getLastModifyTime()
    {
        return $this->container['lastModifyTime'];
    }

    /**
     * Sets lastModifyTime
     *
     * @param string $lastModifyTime 更新时间
     *
     * @return $this
     */
    public function setLastModifyTime($lastModifyTime)
    {
        $this->container['lastModifyTime'] = $lastModifyTime;

        return $this;
    }

    /**
     * Gets remark
     *
     * @return string
     */
    public function getRemark()
    {
        return $this->container['remark'];
    }

    /**
     * Sets remark
     *
     * @param string $remark 备注
     *
     * @return $this
     */
    public function setRemark($remark)
    {
        $this->container['remark'] = $remark;

        return $this;
    }

    /**
     * Gets standardType
     *
     * @return string
     */
    public function getStandardType()
    {
        return $this->container['standardType'];
    }

    /**
     * Sets standardType
     *
     * @param string $standardType 规格型号
     *
     * @return $this
     */
    public function setStandardType($standardType)
    {
        $this->container['standardType'] = $standardType;

        return $this;
    }

    /**
     * Gets unit
     *
     * @return string
     */
    public function getUnit()
    {
        return $this->container['unit'];
    }

    /**
     * Sets unit
     *
     * @param string $unit 单位
     *
     * @return $this
     */
    public function setUnit($unit)
    {
        $this->container['unit'] = $unit;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param int $quantity 数量
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

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


