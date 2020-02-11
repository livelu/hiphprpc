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
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $domainName
     *     @type int|string $scene
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

}

