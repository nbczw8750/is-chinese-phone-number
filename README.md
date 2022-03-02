# isChinesePhoneNumber

中国电话号码验证函数。支持验证手机号码、座机号码。

背景资料：[使用 JavaScript 验证中国手机号码和座机号码](https://www.nickboy.cc/%E4%BD%BF%E7%94%A8-JavaScript-%E9%AA%8C%E8%AF%81%E4%B8%AD%E5%9B%BD%E6%89%8B%E6%9C%BA%E5%8F%B7%E7%A0%81%E5%92%8C%E5%BA%A7%E6%9C%BA%E5%8F%B7%E7%A0%81.html)

## 安装

```bash
composer require nbczwphp/is-chinese-phone-number
```


## 使用

### 验证中国电话号码
语法：

```php
IsChinesePhoneNumber::check(phoneNumber: string | number, strict: boolean = false): boolean
```

示例：

```php
use nbczwphp\isChinesePhoneNumber\IsChinesePhoneNumber;
IsChinesePhoneNumber::check('10086'); // ==> false
IsChinesePhoneNumber::check('18087030020'); // ==> true
IsChinesePhoneNumber::check('010-88888888'); // ==> true
```

### 验证中国手机号码
语法：

```php
IsChinesePhoneNumber::checkMobile(phoneNumber: string | number, strict: boolean = false): boolean
```
示例：

```php
use nbczwphp\isChinesePhoneNumber\IsChinesePhoneNumber;
IsChinesePhoneNumber::checkMobile('10086') // ==> false
IsChinesePhoneNumber::checkMobile('18087030020') // ==> true
IsChinesePhoneNumber::checkMobile('010-88888888') // ==> false
```

### 验证中国座机号码

语法：

```php
IsChinesePhoneNumber::checkLandLine(phoneNumber: string | number, strict: boolean = false): boolean
```

示例：

```php
use nbczwphp\isChinesePhoneNumber\IsChinesePhoneNumber;
IsChinesePhoneNumber::checkLandLine('10086') // ==> false
IsChinesePhoneNumber::checkLandLine('18087030020') // ==> false
IsChinesePhoneNumber::checkLandLine('010-88888888') // ==> true
```
