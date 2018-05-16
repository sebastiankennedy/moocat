<?php

namespace MooCat\Validation;

/**
 * Class ValidationRules
 * 数据验证规则
 *
 * @package MooCat\Validation
 */
class ValidationRules
{
    /**
     * 验证手机号码
     *
     * @param string $number
     *
     * @return bool
     */
    public static function phone(string $number): bool
    {
        return (bool) preg_match('/^(\+?0?86\-?)?((13\d|14[57]|15[^4,\D]|17[3678]|18\d)\d{8}|170[059]\d{7})$/', $number);
    }

    /**
     * 验证用户账号
     *
     * @param string $account
     *
     * @return bool
     */
    public static function account(string $account): bool
    {
        return (bool) preg_match('/^[a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*$/', $account);
    }

    /**
     * 验证用户邮箱
     *
     * @param string $email
     *
     * @return bool
     */
    public static function email(string $email): bool
    {
        return (bool) filter_var($email, FILTER_VALIDATE_EMAIL);
    }
}