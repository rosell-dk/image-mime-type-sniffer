# Image Mime Type Sniffer

Gets mime type of common **image** files by sniffing the file content, looking for signatures.

The fact that this library limits its ambition to sniff images makes it light and simple. It is also quite fast. Most other sniffers iterates through all common signatures, however this library uses a mix of finite-state machine approach and iteration to achieve a good balance of speed, compactness, simplicity and readability.

The library recognizes common image formats, such as GIF, JPEG, WEBP, JPEG-2000 and HEIF

Here is the full list:

- application/psd
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

TODO: AVIF, image/heif

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

# Alternatives

There are quite a few PHP mime type detectors out there:

- https://github.com/Intervention/mimesniffer
- https://github.com/Tinram/File-Identifier
- https://github.com/shanept/MimeSniffer
- https://github.com/zjsxwc/mime-type-sniffer
- https://github.com/thephpleague/mime-type-detection/tree/main/src
