<?php
/**
 * BankAccountQueryTradeQueryBankAccountTradeRespDTOResult
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
 * BankAccountQueryTradeQueryBankAccountTradeRespDTOResult Class Doc Comment
 *
 * @category Class
 * @package  Yeepay\Yop\Sdk\
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BankAccountQueryTradeQueryBankAccountTradeRespDTOResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'BankAccountQueryTradeQueryBankAccountTradeRespDTOResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'returnCode' => 'string',
        'returnMsg' => 'string',
        'totalNum' => 'string',
        'debitSum' => 'string',
        'debitAmt' => 'string',
        'loanSum' => 'string',
        'loanAmt' => 'string',
        'queryToken' => 'string',
        'queryTime' => 'string',
        'detailList' => '\Yeepay\Yop\Sdk\Service\MWallet\Model\BankAccountQueryTradeBankAccountTradeDTOResult[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'returnCode' => null,
        'returnMsg' => null,
        'totalNum' => null,
        'debitSum' => null,
        'debitAmt' => null,
        'loanSum' => null,
        'loanAmt' => null,
        'queryToken' => null,
        'queryTime' => null,
        'detailList' => null
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
        'returnCode' => 'returnCode',
        'returnMsg' => 'returnMsg',
        'totalNum' => 'totalNum',
        'debitSum' => 'debitSum',
        'debitAmt' => 'debitAmt',
        'loanSum' => 'loanSum',
        'loanAmt' => 'loanAmt',
        'queryToken' => 'queryToken',
        'queryTime' => 'queryTime',
        'detailList' => 'detailList'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'returnCode' => 'setReturnCode',
        'returnMsg' => 'setReturnMsg',
        'totalNum' => 'setTotalNum',
        'debitSum' => 'setDebitSum',
        'debitAmt' => 'setDebitAmt',
        'loanSum' => 'setLoanSum',
        'loanAmt' => 'setLoanAmt',
        'queryToken' => 'setQueryToken',
        'queryTime' => 'setQueryTime',
        'detailList' => 'setDetailList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'returnCode' => 'getReturnCode',
        'returnMsg' => 'getReturnMsg',
        'totalNum' => 'getTotalNum',
        'debitSum' => 'getDebitSum',
        'debitAmt' => 'getDebitAmt',
        'loanSum' => 'getLoanSum',
        'loanAmt' => 'getLoanAmt',
        'queryToken' => 'getQueryToken',
        'queryTime' => 'getQueryTime',
        'detailList' => 'getDetailList'
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
        $this->container['returnCode'] = isset($data['returnCode']) ? $data['returnCode'] : null;
        $this->container['returnMsg'] = isset($data['returnMsg']) ? $data['returnMsg'] : null;
        $this->container['totalNum'] = isset($data['totalNum']) ? $data['totalNum'] : null;
        $this->container['debitSum'] = isset($data['debitSum']) ? $data['debitSum'] : null;
        $this->container['debitAmt'] = isset($data['debitAmt']) ? $data['debitAmt'] : null;
        $this->container['loanSum'] = isset($data['loanSum']) ? $data['loanSum'] : null;
        $this->container['loanAmt'] = isset($data['loanAmt']) ? $data['loanAmt'] : null;
        $this->container['queryToken'] = isset($data['queryToken']) ? $data['queryToken'] : null;
        $this->container['queryTime'] = isset($data['queryTime']) ? $data['queryTime'] : null;
        $this->container['detailList'] = isset($data['detailList']) ? $data['detailList'] : null;
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
     * Gets returnCode
     *
     * @return string
     */
    public function getReturnCode()
    {
        return $this->container['returnCode'];
    }

    /**
     * Sets returnCode
     *
     * @param string $returnCode 返回码
     *
     * @return $this
     */
    public function setReturnCode($returnCode)
    {
        $this->container['returnCode'] = $returnCode;

        return $this;
    }

    /**
     * Gets returnMsg
     *
     * @return string
     */
    public function getReturnMsg()
    {
        return $this->container['returnMsg'];
    }

    /**
     * Sets returnMsg
     *
     * @param string $returnMsg 返回信息
     *
     * @return $this
     */
    public function setReturnMsg($returnMsg)
    {
        $this->container['returnMsg'] = $returnMsg;

        return $this;
    }

    /**
     * Gets totalNum
     *
     * @return string
     */
    public function getTotalNum()
    {
        return $this->container['totalNum'];
    }

    /**
     * Sets totalNum
     *
     * @param string $totalNum 总记录条数
     *
     * @return $this
     */
    public function setTotalNum($totalNum)
    {
        $this->container['totalNum'] = $totalNum;

        return $this;
    }

    /**
     * Gets debitSum
     *
     * @return string
     */
    public function getDebitSum()
    {
        return $this->container['debitSum'];
    }

    /**
     * Sets debitSum
     *
     * @param string $debitSum 支出总笔数
     *
     * @return $this
     */
    public function setDebitSum($debitSum)
    {
        $this->container['debitSum'] = $debitSum;

        return $this;
    }

    /**
     * Gets debitAmt
     *
     * @return string
     */
    public function getDebitAmt()
    {
        return $this->container['debitAmt'];
    }

    /**
     * Sets debitAmt
     *
     * @param string $debitAmt 支出总金额
     *
     * @return $this
     */
    public function setDebitAmt($debitAmt)
    {
        $this->container['debitAmt'] = $debitAmt;

        return $this;
    }

    /**
     * Gets loanSum
     *
     * @return string
     */
    public function getLoanSum()
    {
        return $this->container['loanSum'];
    }

    /**
     * Sets loanSum
     *
     * @param string $loanSum 收入总笔数
     *
     * @return $this
     */
    public function setLoanSum($loanSum)
    {
        $this->container['loanSum'] = $loanSum;

        return $this;
    }

    /**
     * Gets loanAmt
     *
     * @return string
     */
    public function getLoanAmt()
    {
        return $this->container['loanAmt'];
    }

    /**
     * Sets loanAmt
     *
     * @param string $loanAmt 收入总金额
     *
     * @return $this
     */
    public function setLoanAmt($loanAmt)
    {
        $this->container['loanAmt'] = $loanAmt;

        return $this;
    }

    /**
     * Gets queryToken
     *
     * @return string
     */
    public function getQueryToken()
    {
        return $this->container['queryToken'];
    }

    /**
     * Sets queryToken
     *
     * @param string $queryToken 查询token
     *
     * @return $this
     */
    public function setQueryToken($queryToken)
    {
        $this->container['queryToken'] = $queryToken;

        return $this;
    }

    /**
     * Gets queryTime
     *
     * @return string
     */
    public function getQueryTime()
    {
        return $this->container['queryTime'];
    }

    /**
     * Sets queryTime
     *
     * @param string $queryTime 查询时间戳
     *
     * @return $this
     */
    public function setQueryTime($queryTime)
    {
        $this->container['queryTime'] = $queryTime;

        return $this;
    }

    /**
     * Gets detailList
     *
     * @return \Yeepay\Yop\Sdk\Service\MWallet\Model\BankAccountQueryTradeBankAccountTradeDTOResult[]
     */
    public function getDetailList()
    {
        return $this->container['detailList'];
    }

    /**
     * Sets detailList
     *
     * @param \Yeepay\Yop\Sdk\Service\MWallet\Model\BankAccountQueryTradeBankAccountTradeDTOResult[] $detailList 交易详情
     *
     * @return $this
     */
    public function setDetailList($detailList)
    {
        $this->container['detailList'] = $detailList;

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


