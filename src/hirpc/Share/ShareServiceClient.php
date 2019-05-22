<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Share;

/**
 */
class ShareServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Share\ShareRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SharingRecords(\Share\ShareRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/share.ShareService/SharingRecords',
        $argument,
        ['\Share\ShareResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Share\GetRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SharingNum(\Share\GetRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/share.ShareService/SharingNum',
        $argument,
        ['\Share\ShareResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Share\GetRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SharingList(\Share\GetRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/share.ShareService/SharingList',
        $argument,
        ['\Share\ShareResponse', 'decode'],
        $metadata, $options);
    }

}
