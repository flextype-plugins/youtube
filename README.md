# Youtube Plugin for [Flextype](http://flextype.org/)
![version](https://img.shields.io/badge/version-1.0.3-brightgreen.svg?style=flat-square)
![Flextype](https://img.shields.io/badge/Flextype-0.8.2-green.svg?style=flat-square)
![MIT License](https://img.shields.io/badge/license-MIT-blue.svg?style=flat-square)

Youtube plugins allows you to insert YouTube videos into the page.

## Installation
Unzip plugin to the folder `/site/plugins/`

## Usage in page content

```
[youtube url="https://www.youtube.com/watch?v=iYnliHrcQyo"]
```

## Usage in the template

Define Flextype namespace in the template if it is not defined yet.
```
<?php namespace Flextype; ?>
```

Display YouTube video
```
<?= youtube('https://www.youtube.com/watch?v=iYnliHrcQyo') ?>
```

## Settings

```yaml
enabled: true # or `false` to disable the plugin
```

## License
See [LICENSE](https://github.com/flextype-plugins/youtube/blob/master/LICENSE)
