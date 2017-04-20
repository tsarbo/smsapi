<?php

namespace NotificationChannels\Smsapi\Tests;

use NotificationChannels\Smsapi\SmsapiSmsMessage;

/**
 * @internal
 */
class SmsapiSmsMessageTest extends SmsapiMessageTest
{
    public function setUp()
    {
        parent::setUp();
        $this->message = new SmsapiSmsMessage();
    }

    /**
     * @return array
     */
    public function provideBool(): array
    {
        return [
            'true' => [true],
            'false' => [false],
        ];
    }

    /** @test */
    public function set_content_by_constructor()
    {
        $message = new SmsapiSmsMessage('Text');
        $this->assertEquals('Text', $message->data['content']);
    }

    /** @test */
    public function set_content()
    {
        $this->message->content('Text');
        $this->assertEquals('Text', $this->message->data['content']);
    }

    /** @test */
    public function set_template()
    {
        $this->message->template('Template');
        $this->assertEquals('Template', $this->message->data['template']);
    }

    /** @test */
    public function set_from()
    {
        $this->message->from('Eco');
        $this->assertEquals('Eco', $this->message->data['from']);
    }

    /**
     * @test
     * @dataProvider provideBool
     */
    public function set_fast(bool $fast)
    {
        $this->message->fast($fast);
        $this->assertEquals($fast, $this->message->data['fast']);
    }

    /**
     * @test
     * @dataProvider provideBool
     */
    public function set_flash(bool $flash)
    {
        $this->message->flash($flash);
        $this->assertEquals($flash, $this->message->data['flash']);
    }

    /** @test */
    public function set_encoding()
    {
        $this->message->encoding('utf-8');
        $this->assertEquals('utf-8', $this->message->data['encoding']);
    }

    /**
     * @test
     * @dataProvider provideBool
     */
    public function set_normalize(bool $normalize)
    {
        $this->message->normalize($normalize);
        $this->assertEquals($normalize, $this->message->data['normalize']);
    }

    /**
     * @test
     * @dataProvider provideBool
     */
    public function set_nounicode(bool $nounicode)
    {
        $this->message->nounicode($nounicode);
        $this->assertEquals($nounicode, $this->message->data['nounicode']);
    }

    /**
     * @test
     * @dataProvider provideBool
     */
    public function set_single(bool $single)
    {
        $this->message->single($single);
        $this->assertEquals($single, $this->message->data['single']);
    }
}
