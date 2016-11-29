# Project 3 - Developers BF for CSCI-E15 (DWA)

![TroubleU Logo](logo-redux.png)

## Live URL
DevelopersBF <http://p3.troubleU.com>


## Description
This repository contains the code for an app called _Developer's BF_. Developer's BF has tools for dynamic web application developers including a lorem ipsum text generator and a random user data generator.

#### Lorem Ipsum Generator
Produces lorem ipsum text in word, sentence and paragraph lengths. The application accepts the following user input to create lorem ipsum text:

- text denominations: word, sentence, or paragraphs
- quantity of paragraphs/words/sentences

#### User Data Generator
Produces several user object properties. The application accepts the following user input to create a users:

- number of unique users
- property options: gender, address, username, password, date of birth, and a sentence of bio (as ipsum lorem)

I hope you enjoy the application.

## Demo
<http://www.screencast.com/t/whCZoVrhv>


## Details for teaching team
No login required.


## Outside code
There are several packages used to make DevelopersBF work:

#### Joshtronic PHP-loremIpsum
* <https://github.com/joshtronic/php-loremipsum>
* This package generates Lorem Ipsum text at the word, sentence and paragraph level.

#### Laravel Debugbar by barryvdh
* <https://github.com/barryvdh/laravel-debugbar>
* Presents live debug information. Used in development only. This package is not enabled for production.

#### Log Viewer
* <https://github.com/rap2hpoutre/laravel-log-viewer>
* Simple log reporting GUI.

#### Milligram CSS Framework
* <https://milligram.github.io>
* This framework provides minimalist CSS styling via CDN

#### RandomUser API
* <https://randomuser.me>
* This package/API generates various fields of random data for users.

#### Rych Random Data Library

* <https://github.com/rchouinard/rych-random>
* This package generates random strings or integers.

#### Susan Buck's Foobooks.css from Foobooks class example
* <https://github.com/susanBuck/foobooks/blob/master/public/css/foobooks.css>
* In the interest of time and focus on the key elements, this project relies on css Milligram CSS Framework (noted below) with layout help from foobooks.css

#### Laravel Version Info
[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/d/total.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

#### License
The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
