Lightbox with the help of YUI2
==============================

This is a lightbox that is created with the help of YUI2. It purposely does not use YUI's Panel. Panel is nice sometimes, but it comes with some baggage I find annoying. Likewise, I don't always use YUI for every possible interaction, such as setting styles. All my target browsers support the same syntax for that action. The one exception is opacity which is not the same across browsers. Basically, I use YUI to make dealing with the hard parts of javascript easier. Nothing more, nothing less.
For a live example, see [http://brian.moonspot.net/lightbox/](http://brian.moonspot.net/lightbox/).

Features
--------

* Lightbox and contents can be created via:
 * Javascript
 * Existing markup
 * Asynchronus (AJAX) request (contents only)
* Lightbox will close when ESC is pressed
* Rounded corners and box shadow using CSS3.

Compatibility
-------------

* Firefox 3.5
* Firefox 4 (beta)
* Chrome 4
* Safari 5
* Internet Explorer 9 (Animation is not working due to YUI's lack of opacity support in IE9)
* Internet Explorer 8 (Via IE9 in IE8 compatibility mode. No rounded corners, no shadows)
* Internet Explorer 7 (Via IE9 in IE7 compatibility mode. No rounded corners, no shadows)
* Opera 10.53

YUI Requirements
----------------
* Dom
* Event
* Connection Core
* JSON
* Selector
* Animation (if animate set to true)

