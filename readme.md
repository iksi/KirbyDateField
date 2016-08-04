# Kirby date field

Date field for kirby that doesn’t use a datepicker but just a regular input field.

## Installation

`git submodule add https://github.com/iksi/kirby-Date-field.git site/fields/date`  
Or place a `date` folder in `site/fields` with the repository’s contents.

## Usage

You can define the date field in your blueprint as you would normally do, only the format differs and uses [php date formats](http://php.net/manual/en/datetime.formats.date.php).

```YAML
date:
  label: Date
  type: date
  format: Y-m-d
  default: now
```
