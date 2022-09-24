<?php

namespace Theofficialvkr\Library\Exception;

/**
 * Conversion of playlists is not supported.
 */
class PlaylistConversionException extends TheofficialvkrLibraryException
{
    /**
     * Error message.
     * @var string
     */
    protected $message = 'Conversion of playlists is not supported.';
}
