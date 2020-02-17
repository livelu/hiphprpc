<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Courseadmin;

/**
 */
class CourseadminClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Courseadmin\Request $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function AdminList(\Courseadmin\Request $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/courseadmin.Courseadmin/AdminList',
        $argument,
        ['\Courseadmin\Response', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Courseadmin\Request $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetAdmincoe(\Courseadmin\Request $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/courseadmin.Courseadmin/GetAdmincoe',
        $argument,
        ['\Courseadmin\Response', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Courseadmin\Request $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SuperadminCode(\Courseadmin\Request $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/courseadmin.Courseadmin/SuperadminCode',
        $argument,
        ['\Courseadmin\Response', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Courseadmin\Request $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function PcLogin(\Courseadmin\Request $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/courseadmin.Courseadmin/PcLogin',
        $argument,
        ['\Courseadmin\Response', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Courseadmin\Request $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function RemoveAdmin(\Courseadmin\Request $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/courseadmin.Courseadmin/RemoveAdmin',
        $argument,
        ['\Courseadmin\Response', 'decode'],
        $metadata, $options);
    }

}
