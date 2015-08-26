# Kirby custom date field

Custom time form field for kirby that doesn’t use a datepicker.

## Installation

`git submodule add https://github.com/iksi/KirbyDateField.git site/fields/date`  
Or place a `data` folder in `/site/fields` with the repository’s contents.

## Usage

You can define the date field in your blueprint as follows:

```YAML
date:
  label: Date
  type: date
  format: Y-m-d
  default: now
```