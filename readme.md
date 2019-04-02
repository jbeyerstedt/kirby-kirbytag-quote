# Quote Kirbytag for Kirby CMS v2/v3
by Jannik Beyerstedt from Hamburg, Germany  
[jannikbeyerstedt.de](http://jannikbeyerstedt.de) | [Github](https://github.com/jbeyerstedt)  
**license:** GNU GPL v3  
**version:** v1.0.0

## Notice About Branches and Kirby 2
Kirby 3 support was added in the `kirby3` branch, because Kirby 2 and Kirby 3 plugins are quite different.
Now that Kirby 3 is released, I changed the default branch to `kirby3` but will keep the `master`, because old Kirby 2 projects might break, if I rename the branches.


## Introduction
This Kirbytag creates a html `blockquote` tag with the option to add an author via a footer tag.
For everyone using the Bootstrap framework, the default Bootstrap classes can be activated in the settings.

## User Manual

#### Installation
Store the php file in

```
site/tags/
```

#### Configuration
To enable the styling classes used by Bootstrap 4, add this to your `config.php`:

```php
c::set('quote.default_style', 'bs');
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
