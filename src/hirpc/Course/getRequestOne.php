<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: course.proto

namespace Course;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>course.getRequestOne</code>
 */
class getRequestOne extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string course_id = 1;</code>
     */
    private $course_id = '';
    /**
     * Generated from protobuf field <code>string coursename = 2;</code>
     */
    private $coursename = '';
    /**
     * Generated from protobuf field <code>int32 size = 3;</code>
     */
    private $size = 0;
    /**
     * Generated from protobuf field <code>int32 offset = 4;</code>
     */
    private $offset = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $course_id
     *     @type string $coursename
     *     @type int $size
     *     @type int $offset
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Course::initOnce();
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
     * Generated from protobuf field <code>string coursename = 2;</code>
     * @return string
     */
    public function getCoursename()
    {
        return $this->coursename;
    }

    /**
     * Generated from protobuf field <code>string coursename = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setCoursename($var)
    {
        GPBUtil::checkString($var, True);
        $this->coursename = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 size = 3;</code>
     * @return int
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Generated from protobuf field <code>int32 size = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->size = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 offset = 4;</code>
     * @return int
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * Generated from protobuf field <code>int32 offset = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setOffset($var)
    {
        GPBUtil::checkInt32($var);
        $this->offset = $var;

        return $this;
    }

}

