<?php

/**
 * EmptyUrlException class.
 */

namespace Theofficialvkr\Library\Exception;

/**
 * Exception thrown when youtube-dl returns an empty URL.
 */
class EmptyUrlException extends TheofficialvkrLibraryException
{
    /**
     * Error message.
     * @var string
     */
    protected $message = 'youtube-dl returned an empty URL.';
}
