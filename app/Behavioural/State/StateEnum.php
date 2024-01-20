<?php

namespace App\Behavioural\State;

class StateEnum
{
    public const CREATED_STATE="CREATED";
    public const COLLECTED_STATE="COLLECTED";
    public const PAID_STATE="PAID";
    public const DELIVERED_STATE="DELIVERED";
    public const DONE_STATE="DONE";
    public const CANCELED_STATE="CANCELED";
    public const ARCHIVED_STATE="ARCHIVED";
    public static function getStates():array
    {
        return [
            self::CREATED_STATE,
            self::COLLECTED_STATE,
            self::PAID_STATE,
            self::DELIVERED_STATE,
            self::CANCELED_STATE,
            self::ARCHIVED_STATE,
            self::DONE_STATE
        ];
    }
}
