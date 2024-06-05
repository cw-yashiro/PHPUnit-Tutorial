<?php
namespace UserName;

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

    public function throwExpectionForTest()
    {
        if($this->username === 'yashiro')
        {
            UserNameExpection::raiseExpectionUserNameInvalid(UserNameExpection::MSG_NOT_YASHIRO);
        }
    }
}
