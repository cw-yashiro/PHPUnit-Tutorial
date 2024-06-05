<?php
namespace UserName;

class UserNameExpection extends \Exception
{
    public const string MSG_NOT_YASHIRO = "you are not yashiro";

    public function __construct(string $message = "", int $code = 0, $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

    public static function raiseExpectionUserNameInvalid($message)
    {
        throw new UserNameExpection($message);
    }
}
