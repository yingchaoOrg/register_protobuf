<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: server.proto

namespace Ms\Register\Server\AdminReply;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * 列表请求
 *
 * Generated from protobuf message <code>ms.Register.Server.AdminReply.listReply</code>
 */
class listReply extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .ms.Register.Common.ServiceData serviceData = 1;</code>
     */
    private $serviceData;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Ms\Register\Common\ServiceData[]|\Google\Protobuf\Internal\RepeatedField $serviceData
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Server::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .ms.Register.Common.ServiceData serviceData = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getServiceData()
    {
        return $this->serviceData;
    }

    /**
     * Generated from protobuf field <code>repeated .ms.Register.Common.ServiceData serviceData = 1;</code>
     * @param \Ms\Register\Common\ServiceData[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setServiceData($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Ms\Register\Common\ServiceData::class);
        $this->serviceData = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(listReply::class, \Ms\Register\Server\AdminReply_listReply::class);

