# Avatar Tools

![License](https://img.shields.io/badge/license-MIT-blue.svg) [![Latest Stable Version](https://img.shields.io/packagist/v/madeyedeer/avatar-tools.svg)](https://packagist.org/packages/madeyedeer/avatar-tools) [![Total Downloads](https://img.shields.io/packagist/dt/madeyedeer/avatar-tools.svg)](https://packagist.org/packages/madeyedeer/avatar-tools) [![](https://img.shields.io/static/v1?label=sponsor&message=%E2%9D%A4&logo=GitHub&color=%23fe8e86)](https://github.com/sponsors/adrianmccay) ![Static Badge](https://img.shields.io/badge/flarum-v1.8.5-%23e7672e?logo=flarum)

Welcome to Avatar Tools [Flarum](http://flarum.org) extension! Yes, it only does one thing... for now. This extension allows you to change the avatar upload file size limit directly from the admin settings, so you can permit larger files to be uploaded. 

For feature requests or suggestions, feel free to contact me on the [Flarum forum](https://discuss.flarum.org/d/34570-avatar-tools). Your feedback is appreciated and I'm open to expanding the functionality of this extension based on user needs.

## Installation

Install with composer:

```sh
composer require madeyedeer/avatar-tools
```

## Updating

```sh
composer update madeyedeer/avatar-tools
php flarum migrate
php flarum cache:clear
```

> Note: Some releases may require a version to be specified when updating, so check the release notes on the [Flarum forum](https://discuss.flarum.org/d/34570-avatar-tools) for specific instructions.

## Usage
Change the avatar upload file size limit in admin settings by entering a value in MB.
If no value is entered, the default value of 2MB will be used. Keep in mind that the actual limit is determined by your server's PHP settings. If your PHP configuration allows for larger file uploads, Avatar Tools will enable you to set a higher limit within Flarum's settings, up to that server limit.

![Settings](https://i.ibb.co/xhyqD8m/settings.png)


## Links

- [Packagist](https://packagist.org/packages/madeyedeer/avatar-tools)
- [GitHub](https://github.com/madeyedeer/avatar-tools)
- [Discuss](https://discuss.flarum.org/d/34570-avatar-tools)

