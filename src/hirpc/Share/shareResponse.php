<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: share.proto

namespace Share;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>share.shareResponse</code>
 */
class shareResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string success = 1;</code>
     */
    private $success = '';
    /**
     * Generated from protobuf field <code>string data = 2;</code>
     */
    private $data = '';
    /**
     * Generated from protobuf field <code>int32 code = 3;</code>
     */
    private $code = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $success
     *     @type string $data
     *     @type int $code
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Share::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string success = 1;</code>
     * @return string
     */
    public function getSuccess()
    {
        return $this->success;
    }

    /**
     * Generated from protobuf field <code>string success = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSuccess($var)
    {
        GPBUtil::checkString($var, True);
        $this->success = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string data = 2;</code>
     * @return string
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Generated from protobuf field <code>string data = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setData($var)
    {
        GPBUtil::checkString($var, True);
        $this->data = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 code = 3;</code>
     * @return int
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Generated from protobuf field <code>int32 code = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setCode($var)
    {
        GPBUtil::checkInt32($var);
        $this->code = $var;

        return $this;
    }

}

