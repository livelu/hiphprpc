<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Bluesystem;

/**
 */
class BluesystemClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Bluesystem\SettingRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Sysparamters(\Bluesystem\SettingRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/bluesystem.Bluesystem/Sysparamters',
        $argument,
        ['\Bluesystem\SettingResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Bluesystem\SetSettingRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Setsysparamters(\Bluesystem\SetSettingRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/bluesystem.Bluesystem/Setsysparamters',
        $argument,
        ['\Bluesystem\SettingResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Bluesystem\SetSettingRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Setsystem(\Bluesystem\SetSettingRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/bluesystem.Bluesystem/Setsystem',
        $argument,
        ['\Bluesystem\SettingResponse', 'decode'],
        $metadata, $options);
    }

}
