<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: course.proto

namespace Course;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>course.getRequestList</code>
 */
class getRequestList extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 mechanism_id = 1;</code>
     */
    private $mechanism_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $mechanism_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Course::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int64 mechanism_id = 1;</code>
     * @return int|string
     */
    public function getMechanismId()
    {
        return $this->mechanism_id;
    }

    /**
     * Generated from protobuf field <code>int64 mechanism_id = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setMechanismId($var)
    {
        GPBUtil::checkInt64($var);
        $this->mechanism_id = $var;

        return $this;
    }

}

