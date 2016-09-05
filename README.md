# StudyParseDown
Parsedown学习文档

学习"erusev/parsedown": "^1.6" ，一个用于解析markdown的语法解析器



> 你可能还喜欢  [Caret](http://caret.io?ref=parsedown) - 我们用于 Mac / Windows / Linux 的markdown编辑器

## Parsedown

[![Build Status](https://img.shields.io/travis/erusev/parsedown/master.svg?style=flat-square)](https://travis-ci.org/erusev/parsedown)
<!--[![Total Downloads](http://img.shields.io/packagist/dt/erusev/parsedown.svg?style=flat-square)](https://packagist.org/packages/erusev/parsedown)-->

更好的PHP语法解析器

[Demo](http://parsedown.org/demo) |
[Benchmarks](http://parsedown.org/speed) |
[Tests](http://parsedown.org/tests/) |
[Documentation](https://github.com/erusev/parsedown/wiki/)

### Features

* 单文本
* 极速
* 可扩展
* [适用于GitHub ](https://help.github.com/articles/github-flavored-markdown)
* HHVM  5.3 to 7.0 测试
* [Markdown 更多扩展](https://github.com/erusev/parsedown-extra)

### 安装

Include `Parsedown.php` or install [the composer package](https://packagist.org/packages/erusev/parsedown).

### 实例

```
<php
$Parsedown = new Parsedown();

echo $Parsedown->text('Hello _Parsedown_!'); # prints: <p>Hello <em>Parsedown</em>!</p>
```

更多例子请看 [wiki](https://github.com/siluzhou-pku/StudyWiki/wiki)和 [this video tutorial](http://youtu.be/wYZBY8DEikI).

### 问题

**Parsedown如何工作?**

Parsedown试图像人工一样读取markdown。首先，它按行阅读，关注一行如何开始，识别语块。举例说，当一行以`-`开始，说明这很可能是列表。当它开始识别语块的时候，会继续识别内容。一边阅读的时候Parsedown会观察特殊符号，识别行内元素。

我们把这种方法叫做“基于行的”。我们认为Parsedown是第一个Markdown语法解析器。自从Parsedown发布后，其他的开发者使用相同的方法来开发其余PHP或者其余语言的的markdown解析器。

**是否符合Commonmarak?**

它通过了大部分的 CommonMark测试，没有通过测试的大部分都是非常不常见的情况。不过随着commonmark的成熟，符合率也会提高。


**使用方有哪些?**

[phpDocumentor](http://www.phpdoc.org/), [October CMS](http://octobercms.com/), [Bolt CMS](http://bolt.cm/), [Kirby CMS](http://getkirby.com/), [Grav CMS](http://getgrav.org/), [Statamic CMS](http://www.statamic.com/), [Herbie CMS](http://www.getherbie.org/), [RaspberryPi.org](http://www.raspberrypi.org/) and [more](https://www.versioneye.com/php/erusev:parsedown/references).


