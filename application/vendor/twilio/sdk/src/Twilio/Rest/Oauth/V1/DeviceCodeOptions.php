<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Oauth\V1;

use Twilio\Options;
use Twilio\Values;

abstract class DeviceCodeOptions {
    /**
     * @param string[] $audiences An array of intended audiences
     * @return CreateDeviceCodeOptions Options builder
     */
    public static function create(array $audiences = Values::ARRAY_NONE): CreateDeviceCodeOptions {
        return new CreateDeviceCodeOptions($audiences);
    }
}

class CreateDeviceCodeOptions extends Options {
    /**
     * @param string[] $audiences An array of intended audiences
     */
    public function __construct(array $audiences = Values::ARRAY_NONE) {
        $this->options['audiences'] = $audiences;
    }

    /**
     * An array of intended audiences for token requests
     *
     * @param string[] $audiences An array of intended audiences
     * @return $this Fluent Builder
     */
    public function setAudiences(array $audiences): self {
        $this->options['audiences'] = $audiences;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Oauth.V1.CreateDeviceCodeOptions ' . $options . ']';
    }
}