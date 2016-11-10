jQuery Scrollator Asset Bundle for Yii2
=======================================

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Add to the require section of your `composer.json` file:

```
"mimicreative/yii2-scrollator": "*"
```

And run in terminal

```
composer update
```

Usage
-----

Use as the asset bundle in Yii2 View files.

```
// write this in your view file or layout
\mimicreative\assets\ScrollatorAsset::register($this);
```

Or maybe you prefer to include it in your asset dependency.

```
public $depends = [
  // ...
  'mimicreative\assets\ScrollatorAsset',
  // ...
];
```

Credit
------

Scrollator project and documentation can be found here [here](https://github.com/FaroeMedia/scrollator).

