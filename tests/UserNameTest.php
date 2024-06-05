<?php
use PHPUnit\Framework\TestCase;

use UserName\UserName;
use UserName\UserNameExpection;

final class UserNameTest extends TestCase
{
    public function testUserNameWithName(): void
    {
        $username = new UserName('yashiro ryo');
        $this->assertSame('yashiro ryo', $username->asString());
    }

    public function testUserNameExpection(): void
    {
        $username = new UserName('yashiro');
        $this->expectException(UserNameExpection::class);
        $username->throwExpectionForTest();
    }
}
