<?php
use PHPUnit\Framework\TestCase;

require('./src/UserName.php');

final class UserNameTest extends TestCase
{
    public function testUserNameWithName(): void
    {
        $username = new UserName('yashiro ryo');
        $this->assertSame('yashiro ryo', $username->asString());
    }
}
