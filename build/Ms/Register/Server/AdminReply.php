<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: server.proto

namespace Ms\Register\Server;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 **
 * 管理员的返回
 *
 * Generated from protobuf message <code>ms.Register.Server.AdminReply</code>
 */
class AdminReply extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.ms.Register.Server.RegReply add = 1;</code>
     */
    protected $add = null;
    /**
     * Generated from protobuf field <code>.ms.Register.Server.AdminReply.listReply list = 2;</code>
     */
    protected $list = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Ms\Register\Server\RegReply $add
     *     @type \Ms\Register\Server\AdminReply\listReply $list
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Server::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.ms.Register.Server.RegReply add = 1;</code>
     * @return \Ms\Register\Server\RegReply|null
     */
    public function getAdd()
    {
        return $this->add;
    }

    public function hasAdd()
    {
        return isset($this->add);
    }

    public function clearAdd()
    {
        unset($this->add);
    }

    /**
     * Generated from protobuf field <code>.ms.Register.Server.RegReply add = 1;</code>
     * @param \Ms\Register\Server\RegReply $var
     * @return $this
     */
    public function setAdd($var)
    {
        GPBUtil::checkMessage($var, \Ms\Register\Server\RegReply::class);
        $this->add = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.ms.Register.Server.AdminReply.listReply list = 2;</code>
     * @return \Ms\Register\Server\AdminReply\listReply|null
     */
    public function getList()
    {
        return $this->list;
    }

    public function hasList()
    {
        return isset($this->list);
    }

    public function clearList()
    {
        unset($this->list);
    }

    /**
     * Generated from protobuf field <code>.ms.Register.Server.AdminReply.listReply list = 2;</code>
     * @param \Ms\Register\Server\AdminReply\listReply $var
     * @return $this
     */
    public function setList($var)
    {
        GPBUtil::checkMessage($var, \Ms\Register\Server\AdminReply\listReply::class);
        $this->list = $var;

        return $this;
    }

}

