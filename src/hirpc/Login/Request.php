<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: login.proto

namespace Login;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>login.Request</code>
 */
class Request extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string domainName = 1;</code>
     */
    private $domainName = '';
    /**
     * Generated from protobuf field <code>int64 scene = 2;</code>
     */
    private $scene = 0;
    /**
     * Generated from protobuf field <code>string phone = 3;</code>
     */
    private $phone = '';
    /**
     * Generated from protobuf field <code>string password = 4;</code>
     */
    private $password = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $domainName
     *     @type int|string $scene
     *     @type string $phone
     *     @type string $password
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Login::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string domainName = 1;</code>
     * @return string
     */
    public function getDomainName()
    {
        return $this->domainName;
    }

    /**
     * Generated from protobuf field <code>string domainName = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setDomainName($var)
    {
        GPBUtil::checkString($var, True);
        $this->domainName = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 scene = 2;</code>
     * @return int|string
     */
    public function getScene()
    {
        return $this->scene;
    }

    /**
     * Generated from protobuf field <code>int64 scene = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setScene($var)
    {
        GPBUtil::checkInt64($var);
        $this->scene = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string phone = 3;</code>
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Generated from protobuf field <code>string phone = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPhone($var)
    {
        GPBUtil::checkString($var, True);
        $this->phone = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string password = 4;</code>
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Generated from protobuf field <code>string password = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setPassword($var)
    {
        GPBUtil::checkString($var, True);
        $this->password = $var;

        return $this;
    }

}

