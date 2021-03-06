<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Login;

/**
 */
class LoginClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Login\Request $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetLoginCode(\Login\Request $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/login.Login/GetLoginCode',
        $argument,
        ['\Login\Response', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Login\Request $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function CheckLogin(\Login\Request $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/login.Login/CheckLogin',
        $argument,
        ['\Login\Response', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Login\Request $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function NameLogin(\Login\Request $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/login.Login/NameLogin',
        $argument,
        ['\Login\Response', 'decode'],
        $metadata, $options);
    }

}
