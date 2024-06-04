<?php
final class UserName
{
    protected string $username;

    public function __construct(string $username)
    {
        $this->username = $username;
    }

    public function asString(): string
    {
        return $this->username;
    }
}

$username = new UserName('yashiro ryo');
echo $username->asString()."\n";
