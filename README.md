# Kntnt Slick

WordPress plugin that loads the last carousel you'll ever need – Slick by Ken Wheeler.

## Description

This plugin only loads the JavaScript and CSS of Ken Wheeler's eminent carousel <a href="http://kenwheeler.github.io/slick/"><em>Slick</em></a>. To use it, just add following HTML code on your page:

    <script>jQuery('[data-slick]').slick();</script>
    
    <div data-slick='{…}'>
      <div>…</div>
      <div>…</div>
      <div>…</div>
    </div>

Please notice that there should be only one instance of `<script>…</script>` on each page.

Replace `…` in `<div>…</div>` with content to appear in a slide of the carousel.

Replace `{…}` in `data-slick='{…}'` with a JSON object containing the carousel settings.

Following is an example on how it can look ike

    <div data-slick='{
            "slidesToShow": 1,
            "slidesToScroll": 1,
            "speed": 1000,
            "autoplay": true,
            "autoplaySpeed": 2000
        }'>
        <div><p>This is slide 1</p></div>
        <div><p>This is slide 2</p></div>
        <div><p>This is slide 3</p></div>
    </div> 

## Requirements

None.

## Installation

Install the plugin [the usually way](https://codex.wordpress.org/Managing_Plugins#Installing_Plugins).

## Frequently Asked Questions

### Where is the setting page?

This plugin has no settings.

### How do I know if there is a new version?

This plugin is currently [hosted on GitHub](https://github.com/kntnt/kntnt-slick); one way would be to ["watch" the repository](https://help.github.com/articles/watching-and-unwatching-repositories/).

If you prefer WordPress to nag you about an update and let you update from within its administrative interface (i.e. the usually way) you must [download *GitHub Updater*](https://github.com/afragen/github-updater/archive/develop.zip) and install and activate it the usually way. Please visit its [wiki](https://github.com/afragen/github-updater/wiki) for more information. 

### How can I get help?

If you have a questions about the plugin, and cannot find an answer here, start by looking at [issues](https://github.com/kntnt/kntnt-slick/issues) and [pull requests](https://github.com/kntnt/kntnt-slick/pulls). If you still cannot find the answer, feel free to ask in the the plugin's [issue tracker](https://github.com/kntnt/kntnt-slick/issues) at Github.

### How can I report a bug?

If you have found a potential bug, please report it on the plugin's [issue tracker](https://github.com/kntnt/kntnt-slick/issues) at Github.

### How can I contribute?

Contributions to the code or documentation are much appreciated.

If you are unfamiliar with Git, please date it as a new issue on the plugin's [issue tracker](https://github.com/kntnt/kntnt-slick/issues) at Github.

If you are familiar with Git, please do a pull request.

## Changelog

### 1.0.0

Initial release. Fully functional plugin.
