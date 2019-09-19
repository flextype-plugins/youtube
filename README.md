# Youtube Plugin for [Flextype](http://flextype.org/)
![version](https://img.shields.io/badge/version-1.0.5-brightgreen.svg?style=flat-square)
![Flextype](https://img.shields.io/badge/Flextype-0.9.4-green.svg?style=flat-square)
![MIT License](https://img.shields.io/badge/license-MIT-blue.svg?style=flat-square)

Youtube plugins allows you to insert YouTube videos into the page.

## Installation
Unzip plugin to the folder `/site/plugins/`

## Usage in page content

```
[youtube url="https://www.youtube.com/watch?v=iYnliHrcQyo"]
```

## Usage in the template

Display YouTube video
```
{{ youtube('https://www.youtube.com/watch?v=iYnliHrcQyo') }}
```

## Settings

```yaml
enabled: true
```

## LICENSE
[The MIT License (MIT)](https://github.com/flextype-plugins/sitemap/blob/master/LICENSE) Copyright (c) 2018-2019 [Sergey Romanenko](https://github.com/Awilum)
