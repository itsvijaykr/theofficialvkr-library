# theofficialvkr library

This library lets you extract a video URL from a webpage
by providing a wrapper
for [youtube-dl](https://ytdl-org.github.io/youtube-dl/index.html).

It is primarily used by [theofficialvkr Download](https://github.com/itsvijaykr/theofficialvkr).

You can install it with:

```bash
composer require itsvijaykr/theofficialvkr-library
```

You can then use it in your PHP code:

```php
use Theofficialvkr\Library\Downloader;

require_once __DIR__.'/vendor/autoload.php';

$downloader = new Downloader('/usr/local/bin/youtube-dl');
$video = $downloader->getVideo('https://www.youtube.com/watch?v=dQw4w9WgXcQ');
$video->getUrl();
```

You can also have a look at
this [example project](https://github.com/itsvijaykr).
