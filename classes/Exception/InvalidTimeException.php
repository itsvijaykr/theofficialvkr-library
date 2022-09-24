<?php

namespace Theofficialvkr\Library\Exception;

/**
 * Invalid time.
 */
class InvalidTimeException extends TheofficialvkrLibraryException
{

    /**
     * InvalidTimeException constructor.
     * @param string $time Invalid time
     */
    public function __construct(string $time)
    {
        parent::__construct('Invalid time: ' . $time);
    }
}
