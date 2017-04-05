# concrete5-tmblocks-default

This packages provides some default blocks using https://github.com/farion/concrete5-tmblocks

## 1 Installation

1. Go to your concrete5 root directory (using a cli interface)
2. If you not yet have installed composer do it now: `curl -sS https://getcomposer.org/installer | php`
3. Add the following to your composer.json

  ```javascript
  {
    ...
    "repositories": [
      ...
      {
        "url": "https://github.com/farion/concrete5-tmblocks-default",
        "type": "git"
      }
    ],
    "require": {
      ...
      "farion/tmblocks-default": "@dev"
    },
    ...
  }
  ```
4. run `composer install` (or `php composer.phar install`)

## 2 Notes

While these blocks working basically, they are thought as examples. In general the blocks produce HTML showing the appropriate content. But no CSS or JS is provided and left for you to add.
