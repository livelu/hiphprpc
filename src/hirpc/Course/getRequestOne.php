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
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $course_id
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

}
