<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/developerconnect/v1/developer_connect.proto

namespace Google\Cloud\DeveloperConnect\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Message for fetching SCM read/write token.
 *
 * Generated from protobuf message <code>google.cloud.developerconnect.v1.FetchReadWriteTokenRequest</code>
 */
class FetchReadWriteTokenRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the gitRepositoryLink in the format
     * `projects/&#42;&#47;locations/&#42;&#47;connections/&#42;&#47;gitRepositoryLinks/&#42;`.
     *
     * Generated from protobuf field <code>string git_repository_link = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $git_repository_link = '';

    /**
     * @param string $gitRepositoryLink Required. The resource name of the gitRepositoryLink in the format
     *                                  `projects/&#42;/locations/&#42;/connections/&#42;/gitRepositoryLinks/*`. Please see
     *                                  {@see DeveloperConnectClient::gitRepositoryLinkName()} for help formatting this field.
     *
     * @return \Google\Cloud\DeveloperConnect\V1\FetchReadWriteTokenRequest
     *
     * @experimental
     */
    public static function build(string $gitRepositoryLink): self
    {
        return (new self())
            ->setGitRepositoryLink($gitRepositoryLink);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $git_repository_link
     *           Required. The resource name of the gitRepositoryLink in the format
     *           `projects/&#42;&#47;locations/&#42;&#47;connections/&#42;&#47;gitRepositoryLinks/&#42;`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Developerconnect\V1\DeveloperConnect::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the gitRepositoryLink in the format
     * `projects/&#42;&#47;locations/&#42;&#47;connections/&#42;&#47;gitRepositoryLinks/&#42;`.
     *
     * Generated from protobuf field <code>string git_repository_link = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getGitRepositoryLink()
    {
        return $this->git_repository_link;
    }

    /**
     * Required. The resource name of the gitRepositoryLink in the format
     * `projects/&#42;&#47;locations/&#42;&#47;connections/&#42;&#47;gitRepositoryLinks/&#42;`.
     *
     * Generated from protobuf field <code>string git_repository_link = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setGitRepositoryLink($var)
    {
        GPBUtil::checkString($var, True);
        $this->git_repository_link = $var;

        return $this;
    }

}

