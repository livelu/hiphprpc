<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: share.proto

namespace Share;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>share.getRequest</code>
 */
class getRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string course_id = 1;</code>
     */
    private $course_id = '';
    /**
     * Generated from protobuf field <code>int64 limit = 2;</code>
     */
    private $limit = 0;
    /**
     * Generated from protobuf field <code>int64 offset = 3;</code>
     */
    private $offset = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $course_id
     *     @type int|string $limit
     *     @type int|string $offset
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Share::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string course_id = 1;</code>
     * @return string
     */
    public function getCourseId()
    {
        return $this->course_id;
    }

    /**
     * Generated from protobuf field <code>string course_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setCourseId($var)
    {
        GPBUtil::checkString($var, True);
        $this->course_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 limit = 2;</code>
     * @return int|string
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * Generated from protobuf field <code>int64 limit = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setLimit($var)
    {
        GPBUtil::checkInt64($var);
        $this->limit = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 offset = 3;</code>
     * @return int|string
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * Generated from protobuf field <code>int64 offset = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setOffset($var)
    {
        GPBUtil::checkInt64($var);
        $this->offset = $var;

        return $this;
    }

}

