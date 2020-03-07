<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Auth;

/**
 */
class AuthClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Auth\Request $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function MakeAccessToken(\Auth\Request $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/auth.Auth/MakeAccessToken',
        $argument,
        ['\Auth\Response', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Auth\Request $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function DelUserAccessToken(\Auth\Request $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/auth.Auth/DelUserAccessToken',
        $argument,
        ['\Auth\Response', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Auth\Request $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function CheckAccessToken(\Auth\Request $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/auth.Auth/CheckAccessToken',
        $argument,
        ['\Auth\Response', 'decode'],
        $metadata, $options);
    }

}
