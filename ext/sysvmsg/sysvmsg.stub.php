<?php

/** @generate-class-entries */

/**
 * @strict-properties
 * @not-serializable
 */
final class SysvMessageQueue
{
}

function msg_get_queue(int $key, int $permissions = 0666): SysvMessageQueue|false {}

/**
 * @param string|int|float|bool $message
 * @param int $error_code
 */
function msg_send(SysvMessageQueue $queue, int $message_type, $message, bool $serialize = true, bool $blocking = true, &$error_code = null): bool {}

/**
 * @param int $received_message_type
 * @param int $error_code
 */
function msg_receive(
    SysvMessageQueue $queue,
    int $desired_message_type,
    &$received_message_type,
    int $max_message_size,
    mixed &$message,
    bool $unserialize = true,
    int $flags = 0,
    &$error_code = null
): bool {}

function msg_remove_queue(SysvMessageQueue $queue): bool {}

function msg_stat_queue(SysvMessageQueue $queue): array|false {}

function msg_set_queue(SysvMessageQueue $queue, array $data): bool {}

function msg_queue_exists(int $key): bool {}
