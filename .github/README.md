# Determine the Operating System your code is running on

This simple package assists with determining what Operating System your code is running on. Right now the Operating Systems supported are Linux, Mac OS, and Windows. We have implemented fallbacks for Operating Systems as well.

## To Install

```bash
composer require anteris-dev/os-helper
```

## Find an OS that is missing?

We would love to see your contribution to this package to make it better for its users. Feel free to make a pull request to add any missing Operating Systems you stumble across.

# Boolean Checks

You can use the `isLinux()`, `isMacOs()`, and `isWindows()` methods to run simple boolean checks about the OS.

For example:

```php

use Anteris\Helper\OS;

if ( OS::isLinux() ) {
    echo 'Running on Linux!';
}

if ( OS::isMacOs() ) {
    echo 'Running on Mac!';
}

if ( OS::isWindows() ) {
    echo 'Running on Windows!';
}

```

# If Statements

To make the above examples more fluent, you may also use the if methods to perform if statements.

For example:

```php

use Anteris\Helper\OS;

OS::ifLinux(function () {
    echo 'Running on Linux!';
});

OS::ifMacOs(function () {
    echo 'Running on Mac!';
});

Os::ifWindows(function () {
    echo 'Running on Windows!';
});

```

# Getting the OS Friendly Name

You can get the friendly name of the Operating System using the `name()` method. The OS name may span multiple words (e.g. "Mac OS") and include capitilized letters.

For example:

```php

use Anteris\Helper\OS;


// On a Mac machine, this would output: Mac OS

echo OS::name();

```

# Getting the OS Short Name

The OS shortname is great for making comparisons with. The OS name has all spaces removed and is made to be all lowercase.

For example:

```php

use Anteris\Helper\OS;


// On a Mac machine, this would output: macos

echo OS::shortName();

```
