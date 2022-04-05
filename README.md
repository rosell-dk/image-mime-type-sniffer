# Image Mime Type Sniffer

Gets mime type of common **image** files by sniffing the file signature.
The fact that this library limits its ambition to sniff images makes it quite lite and simple

The library recognizes common image formats, such as GIF, JPEG, WEBP, JPEG-2000 and HEIF
Here is the full list:

- application/psd
- image/bmp
- image/gif
- image/heic
- image/heif
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

TODO: AVIF

# Alternatives

There are quite a few PHP mime type detectors out there:

- https://github.com/Intervention/mimesniffer
- https://github.com/Tinram/File-Identifier
- https://github.com/shanept/MimeSniffer
- https://github.com/zjsxwc/mime-type-sniffer
- https://github.com/thephpleague/mime-type-detection/tree/main/src
