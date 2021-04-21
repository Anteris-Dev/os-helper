<?php

namespace Anteris\Helper;

/**
 * This class provides some basic helpers for Operating System names. Currently
 * it only supports the three major players: Linux, Mac OS, and Windows.
 *
 * @author Aidan Casey <aidan.casey@anteris.com>
 */
class OS
{
    public static function isLinux(): bool
    {
        return (self::shortName() === 'linux');
    }

    public static function ifLinux(callable $callback): void
    {
        if (static::isLinux()) {
            $callback();
        }
    }

    public static function isMacOs()
    {
        return (self::shortName() === 'macos');
    }

    public static function ifMacOs(callable $callback): void
    {
        if (static::isMacOs()) {
            $callback();
        }   
    }

    public static function isWindows(): bool
    {
        return (self::shortName() === 'windows');
    }

    public static function ifWindows(callable $callback): void
    {
        if (static::isWindows()) {
            $callback();
        }
    }

    /**
     * Returns the OS name in a friendly manner, for user display.
     */
    public static function name()
    {
        $osSystemName = php_uname('s');

        switch ($osSystemName) {
            case 'Darwin':
                return 'Mac OS';
            break;

            case 'Linux':
                return $osSystemName;
            break;

            case 'Windows':
                return $osSystemName;
            break;

            default:
                return $osSystemName;
            break;
        }
    }

    /**
     * Returns the OS name in an unfriendly short fashion best for use in
     * comparisons.
     */
    public static function shortName()
    {
        $osSystemName = self::name();

        switch ($osSystemName) {
            case 'Mac OS':
                return 'macos';
            break;

            case 'Linux':
                return 'linux';
            break;

            case 'Windows':
                return 'windows';
            break;

            // Fall back on removing spaces and making everything lowercase
            default:
                return str_replace(' ', '', strtolower($osSystemName));
            break;
        }
    }
}
