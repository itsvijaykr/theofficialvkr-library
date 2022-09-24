<?php

namespace Theofficialvkr\Library\Exception;

/**
 * Invalid conversion.
 */
class InvalidProtocolConversionException extends TheofficialvkrLibraryException
{
    /**
     * InvalidProtocolConversionException constructor.
     * @param string $protocol Protocol
     */
    public function __construct(string $protocol)
    {
        parent::__construct($protocol . ' protocol is not supported in conversions.');
    }
}
