# [Countdown](http://fengyuanchen.github.io/countdown)

A jQuery countdown plugin.

- [Documentation](http://fengyuanchen.github.io/countdown)


# Getting started


## Installation

Include files:

```html
<script src="/path/to/jquery.js"></script><!-- jQuery is required -->
<script src="/path/to/countdown.js"></script>
```


## Usage

### Initialize with `countdown` and `data-*` attributes

#### Basic

```html
<span countdown>Feb 02 2020 20:20:22</span>
```

#### Add options with `data-*` attribute

```html
<span countdown data-date="Feb 02 2020 20:20:22"></span>
```


### Initialize with `$.fn.countdown` method

#### Basic

```html
<span class="countdown">Feb 02 2020 20:20:22</span>
```

```javascript
$(".countdown").countdown();
```

#### Add options

```html
<span class="countdown"></span>
```

```javascript
$(".countdown").countdown({
    date: new Date(2020, 1, 2, 20, 20, 22)
});
```


## Options

Setup with `$("#target").countdown(options)`, or global setup with `$.fn.countdown.setDefaults(options)`.

#### autoStart

* type: boolean
* default: true

Auto start the countdown when initialized.


#### date

* type: object / number / string
* default: null

The target date, allow date object, time number (milliseconds) and valid date string.


#### fast

* type: boolean
* default: false

Set it `true` to update the date number per one tenth second.


#### end

* type: function
* default: `function() {}`

The function will be run when the countdown end.


#### text

* type: string
* default: "%s days, %s hours, %s minutes, %s seconds"

Just a text template, you can customize it, e.g., "%s D / %s H / %s M / %s S".



## Methods

#### start

- Start the countdown.
- Usage: `$().countdown("start")`.


#### stop

- Stop the countdown
- Usage: `$().countdown("stop")`.


#### end

- End the countdown
- Usage: `$().countdown("end")`.


#### destroy

-Destroy the countdown
- Usage: `$().countdown("destroy")`.



## Customize

Add `data-*` attribute to time number wrapper in the target container, then the time numbers will be updated when time change.

For example:

```html
<div countdown data-date="Feb 02 2020 20:20:22">
    <span data-days>0</span> days
    <span data-hours>0</span> hours
    <span data-minutes>0</span> minutes
    <span data-seconds>0</span> seconds
</div>
```


## Browser Support

- IE 6+
- Chrome 33+
- Firefox 27+
- Safari 5.1+
- Opera 19+

As a jQuery plugin, you can reference to the [jQuery Browser Support](http://jquery.com/browser-support/).



## [License](https://github.com/fengyuanchen/countdown/blob/master/LICENSE.md)

Released under the [MIT](http://opensource.org/licenses/mit-license.html) license.
