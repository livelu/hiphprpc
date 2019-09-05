<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Course;

/**
 */
class CourseServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Course\GetRequestOne $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetCurrRow(\Course\GetRequestOne $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/course.CourseService/GetCurrRow',
        $argument,
        ['\Course\CourseResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Course\GetRequestList $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetCurrList(\Course\GetRequestList $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/course.CourseService/GetCurrList',
        $argument,
        ['\Course\CourseResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Course\GetRequestOne $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SeachCurr(\Course\GetRequestOne $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/course.CourseService/SeachCurr',
        $argument,
        ['\Course\CourseResponse', 'decode'],
        $metadata, $options);
    }

}
