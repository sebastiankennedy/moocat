<?php

namespace MooCat\Validation;

/**
 * Class Validator
 * 数据验证器
 *
 * @package MooCat\Validation
 */
class Validator
{
    /**
     * 验证多个登录字段
     *
     * @param string $value
     * @param string $defaultField
     *
     * @return string
     */
    public function validateMultipleLoginFields(string $value, string $defaultField = 'account'): string
    {
        $map = [
            'email' => ValidationRules::email($value),
            'phone' => ValidationRules::phone($value),
            'account' => ValidationRules::account($value),
        ];

        foreach ($map as $field => $result) {
            if ($result) {
                return $field;
            }
        }

        return $defaultField;
    }
}
