<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Mechanism;

/**
 */
class MechanismClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Mechanism\Request $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function MechanismList(\Mechanism\Request $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/mechanism.Mechanism/MechanismList',
        $argument,
        ['\Mechanism\Response', 'decode'],
        $metadata, $options);
    }

}
