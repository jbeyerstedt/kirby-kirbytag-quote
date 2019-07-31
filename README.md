# Quote Kirbytag for Kirby CMS v3
by Jannik Beyerstedt from Hamburg, Germany  
[jannikbeyerstedt.de](http://jannikbeyerstedt.de) | [Github](https://github.com/jbeyerstedt)  
**license:** GNU GPL v3  
**version:** v2.0.0

## Notice About Branches and Kirby 2
Kirby 3 support was added in the `kirby3` branch, because Kirby 2 and Kirby 3 plugins are quite different.
Now that Kirby 3 is released, I changed the default branch to `kirby3` but will keep the `master`, because old Kirby 2 projects might break, if I rename the branches.

**Updating from the Kirby 2 version:** The configuration options are now prefixed by `jbeyerstedt.quote` instead of `quote`.
This is caused by the new way, how plugins work within Kirby 3.


## Introduction
This Kirbytag creates a html `blockquote` tag with the option to add an author via a footer tag.
For everyone using the Bootstrap framework, the default Bootstrap classes can be activated in the settings.


## User Manual

#### Installation
For manual installation, copy all of these files to `site/plugins/kirbytag-quote`.

If you are using git submodules to manage the plugins, use this command:
```
git submodule add https://github.com/jbeyerstedt/kirby-kirbytag-quote site/plugins/kirbytag-quote
```

If you are using composer add this to your `composer.json` to always get the latest version:
```json
"require": {
    "jbeyerstedt/quote": "dev-kirby3"
}
```
Alternatively, you can select any version greater than 2.0.


#### Configuration
To enable the styling classes used by Bootstrap 4, add this to your `config.php`:

```php
c::set('jbeyerstedt.quote.default_style', 'bs');
```

#### Usage
Use this kirbytag as every other one in your text. Here are some examples:

```
(quote: Awesome quote author: me)
```

##### Parameters

* quote: The sentence or paragraph you want to cite
* author: (optional) the author, will be set a footer html tag
* class: (optional) css class to add to the blockquote
* cite: (optional) cite tag at the end of the footer tag


## Contribution
Feel free to fork this repository and make it better. If there is a bug I missed, please let me know by opening an issue.
