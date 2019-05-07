<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Users;

/**
 */
class UsersClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Users\Request $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetUserId(\Users\Request $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/users.Users/GetUserId',
        $argument,
        ['\Users\Response', 'decode'],
        $metadata, $options);
    }

}
