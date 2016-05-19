# Phpunit Extend Report
[![License](https://img.shields.io/github/license/tonicforhealth/phpunit-extend-report.svg?maxAge=2592000)](LICENSE.md)
[![Build Status](https://travis-ci.org/tonicforhealth/phpunit-extend-report.svg?branch=master)](https://travis-ci.org/tonicforhealth/phpunit-extend-report)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/tonicforhealth/phpunit-extend-report/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/tonicforhealth/phpunit-extend-report/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/tonicforhealth/phpunit-extend-report/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/tonicforhealth/phpunit-extend-report/?branch=master)
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/6632c117-eefe-4031-b9a5-d29535be7b1e/mini.png)](https://insight.sensiolabs.com/projects/6632c117-eefe-4031-b9a5-d29535be7b1e)


Tool make junit_extended_report.xml with ID attr

## Installation using [Composer](http://getcomposer.org/)

```bash
$ composer require tonicforhealth/phpunit-extend-report
```

## Usage

phpunit —printer TonicForHealth\\Test\\Util\\Log\\JUnitExtended

or in the phpunit.xml.dist add:

```xml
<listeners>
    <listener class="TonicForHealth\\Test\\Util\\Log\\JUnitExtended" />
 <listeners>
```

