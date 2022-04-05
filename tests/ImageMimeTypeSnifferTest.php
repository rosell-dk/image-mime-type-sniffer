<?php

namespace Tests\ImageMimeTypeSniffer;

use \ImageMimeTypeSniffer\ImageMimeTypeSniffer;
use \PHPUnit\Framework\TestCase;

class ImageMimeTypeSnifferTest extends TestCase
{

    private function mimeSniff($fileName)
    {
        return ImageMimeTypeSniffer::detect(__DIR__ . '/images/' . $fileName);
    }


    public function testGIF()
    {
        $this->assertEquals('image/gif', $this->mimeSniff('gif-test.gif'));
    }

    public function testPNG()
    {
        $this->assertEquals('image/png', $this->mimeSniff('png-test.png'));
        $this->assertEquals('image/png', $this->mimeSniff('png-very-small.png'));
        $this->assertEquals('image/png', $this->mimeSniff('png-with-jpeg-extension.jpg'));
        $this->assertEquals('image/png', $this->mimeSniff('png-without-extension'));
        $this->assertEquals('image/png', $this->mimeSniff('png-not-true-color.png'));
    }

    public function testJpeg()
    {
        $this->assertEquals('image/jpeg', $this->mimeSniff('jpg-test.jpg'));

        $this->assertEquals('image/jpeg', $this->mimeSniff('.jpg-beginning-with-dot.jpg'));

        // Adding a file to the repo which ends with a dot makes checkout fail on Windows.
        // See here: https://github.com/rosell-dk/image-mime-type-sniffer/runs/5832821464?check_suite_focus=true
        // So, we cannot run this test:
        // $this->assertEquals('image/jpeg', $this->mimeSniff('jpg-ending-with-dot.jpg.'));

        $this->assertEquals('image/jpeg', $this->mimeSniff('jpg-with space.jpg'));
    }

    public function testJpeg2000()
    {
        $this->assertEquals('image/jp2', $this->mimeSniff('jpeg-2000-jp2-test.jp2'));
        // TODO: test jpx, etc
    }

    public function testSVG()
    {
        $this->assertEquals('image/svg+xml', $this->mimeSniff('svg-test.svg'));
    }


    public function testTiff()
    {
        $this->assertEquals('image/tiff', $this->mimeSniff('tif-test.tif'));
    }

    public function testWebP()
    {
        $this->assertEquals('image/webp', $this->mimeSniff('webp-test.webp'));
    }

    /* --------- below here: files that are not images, should NOT be recognized ------------- */
    public function testTxt()
    {
        $this->assertNull($this->mimeSniff('not-images/txt-test.txt'));
    }
    public function testODT()
    {
        $this->assertNull($this->mimeSniff('not-images/odt-test.odt'));
    }

    /*
    public function testICO()
    {
        $this->assertEquals('image/ico', $this->mimeSniff('ico-test.ico'));
        $this->assertEquals('image/ico', $this->mimeSniff('ico2-test.ico'));
    }*/


//        doDetectTest('not-images/txt-test.txt', false);

}
