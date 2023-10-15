# Image Mime Type Sniffer

[![Latest Stable Version](https://img.shields.io/packagist/v/rosell-dk/image-mime-type-sniffer.svg)](https://packagist.org/packages/rosell-dk/image-mime-type-sniffer)
[![Minimum PHP Version](https://img.shields.io/packagist/php-v/rosell-dk/image-mime-type-sniffer)](https://php.net)
[![Build Status](https://github.com/rosell-dk/image-mime-type-sniffer/actions/workflows/ci.yml/badge.svg)](https://github.com/rosell-dk/image-mime-type-sniffer/actions/workflows/ci.yml)
[![Software License](https://img.shields.io/badge/license-MIT-418677.svg)](https://github.com/rosell-dk/image-mime-type-sniffer/blob/master/LICENSE)
[![Coverage](https://img.shields.io/endpoint?url=https://little-b.it/image-mime-type-sniffer/code-coverage/coverage-badge.json)](http://little-b.it/image-mime-type-sniffer/code-coverage/coverage/index.html)
[![Monthly Downloads](http://poser.pugx.org/rosell-dk/image-mime-type-sniffer/d/monthly)](https://packagist.org/packages/rosell-dk/image-mime-type-sniffer)
[![Dependents](http://poser.pugx.org/rosell-dk/image-mime-type-sniffer/dependents)](https://packagist.org/packages/rosell-dk/image-mime-type-sniffer/dependents?order_by=downloads)


Gets mime type of common *image* files by sniffing the file content, looking for signatures.

The fact that this library limits its ambition to sniff images makes it light and simple. It is also quite fast. Most other sniffers iterates through all common signatures, however this library uses a mix of finite-state machine approach and iteration to achieve a good balance of speed, compactness, simplicity and readability.

The library recognizes the most widespread image formats, such as GIF, JPEG, WEBP, AVIF, JPEG-2000 and HEIC.

# Usage

```php
use \ImageMimeTypeSniffer\ImageMimeTypeSniffer;

$mimeType = ImageMimeTypeSniffer::detect($fileName);  
if (is_null($mimeType)) {
  // mimetype was not detected, which means the file is probably not an image (unless it is a rare type)
} else {
  // It is an image, and we know the mimeType
}
```

PS: An `\Exception` is thrown if the file is unreadable.

# Platforms
Works on (at least):
OS: Ubuntu (22.04, 20.04), Windows (2022, 2019), Mac OS (11, 10.15)
PHP: 5.6 - 8.2 (also tested 8.3 and 8.4 development versions in October 2023)

Each new release will be tested on all combinations of OSs and PHP versions that are [supported](https://github.com/marketplace/actions/setup-php-action) by GitHub-hosted runners. Except that we do not below PHP 5.6.

Testing consists of running the unit tests. The code in this library is almost completely covered by tests (~97% coverage).

Release 1.1.1 has been tested in PHP: 5.6 - 8.2 on the following OSs: Ubuntu (22.04, 20.04, 18.04), Windows (2022, 2019), Mac OS (13, 12, 11, 10.15). Code coverage: ~97%. For some reason PHP 5.6 testing fails on Windows

# List of recognized image types:

- application/psd
- image/avif
- image/bmp
- image/gif
- image/heic
- image/jp2
- image/jp20
- image/jpeg
- image/jpm
- image/jpx
- image/png
- image/svg+xml
- image/tiff
- image/webp
- image/x-icon
- video/mj2

TODO: image/heif


# Alternatives

I have created a library that uses this library as well as other methods (*finfo*, *exif_imagetype*, etc) for determining image type. You might want to use that instead, to cover all bases. It is available here: [image-mime-type-guesser](https://github.com/rosell-dk/image-mime-type-guesser).

There are also other PHP mime type sniffers out there:

- https://github.com/Intervention/mimesniffer
- https://github.com/Tinram/File-Identifier
- https://github.com/shanept/MimeSniffer
- https://github.com/zjsxwc/mime-type-sniffer
- https://github.com/thephpleague/mime-type-detection/tree/main/src

## Do you like what I do?
Perhaps you want to support my work, so I can continue doing it :)

- [Become a backer or sponsor on Patreon](https://www.patreon.com/rosell).
- [Buy me a Coffee](https://ko-fi.com/rosell)
