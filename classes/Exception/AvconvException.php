<?php

namespace Theofficialvkr\Library\Exception;

/**
 * Can't find avconv or ffmpeg.
 */
class AvconvException extends TheofficialvkrLibraryException
{
    /**
     * AvconvException constructor.
     * @param string $path Path to avconv or ffmpeg.
     */
    public function __construct(string $path)
    {
        parent::__construct("Can't find avconv or ffmpeg at " . $path . '.');
    }
}
