<?php

namespace Theofficialvkr\Library\Exception;

/**
 * Could not open popen stream.
 */
class PopenStreamException extends TheofficialvkrLibraryException
{
    /**
     * Error message.
     * @var string
     */
    protected $message = 'Could not open popen stream.';
}
