<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: bluesystem.proto

namespace Bluesystem;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>bluesystem.Message</code>
 */
class Message extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string say = 1;</code>
     */
    private $say = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $say
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Bluesystem::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string say = 1;</code>
     * @return string
     */
    public function getSay()
    {
        return $this->say;
    }

    /**
     * Generated from protobuf field <code>string say = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSay($var)
    {
        GPBUtil::checkString($var, True);
        $this->say = $var;

        return $this;
    }

}
