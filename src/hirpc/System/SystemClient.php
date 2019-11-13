<?php
// GENERATED CODE -- DO NOT EDIT!

namespace System;

/**
 */
class SystemClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \System\SettingRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Sysparamters(\System\SettingRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/system.System/Sysparamters',
        $argument,
        ['\System\SettingResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \System\SetSettingRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Setsysparamters(\System\SetSettingRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/system.System/Setsysparamters',
        $argument,
        ['\System\SettingResponse', 'decode'],
        $metadata, $options);
    }

}
