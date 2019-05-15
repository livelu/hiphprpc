<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: share.proto

namespace Share;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>share.Share</code>
 */
class Share extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string course_id = 1;</code>
     */
    private $course_id = '';
    /**
     * Generated from protobuf field <code>int64 fuserid = 2;</code>
     */
    private $fuserid = 0;
    /**
     * Generated from protobuf field <code>int64 juserid = 3;</code>
     */
    private $juserid = 0;
    /**
     * Generated from protobuf field <code>int64 scene = 4;</code>
     */
    private $scene = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $course_id
     *     @type int|string $fuserid
     *     @type int|string $juserid
     *     @type int|string $scene
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
     * Generated from protobuf field <code>int64 fuserid = 2;</code>
     * @return int|string
     */
    public function getFuserid()
    {
        return $this->fuserid;
    }

    /**
     * Generated from protobuf field <code>int64 fuserid = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setFuserid($var)
    {
        GPBUtil::checkInt64($var);
        $this->fuserid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 juserid = 3;</code>
     * @return int|string
     */
    public function getJuserid()
    {
        return $this->juserid;
    }

    /**
     * Generated from protobuf field <code>int64 juserid = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setJuserid($var)
    {
        GPBUtil::checkInt64($var);
        $this->juserid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 scene = 4;</code>
     * @return int|string
     */
    public function getScene()
    {
        return $this->scene;
    }

    /**
     * Generated from protobuf field <code>int64 scene = 4;</code>
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

