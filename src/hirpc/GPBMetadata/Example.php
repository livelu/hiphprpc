<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: example.proto

namespace hirpc\GPBMetadata;

class Example
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(hex2bin(
            "0a9c010a0d6578616d706c652e70726f746f12076578616d706c65221b0a" .
            "0b4772706352657175657374120c0a046e616d65180120012809221b0a0c" .
            "47727063526573706f6e7365120b0a036d736718012001280932400a0745" .
            "78616d706c6512350a0443616c6c12142e6578616d706c652e4772706352" .
            "6571756573741a152e6578616d706c652e47727063526573706f6e736522" .
            "00620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

