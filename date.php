<?php

class DateField extends InputField {

  public $override = false;

  public function __construct() {
    $this->icon = 'calendar-o';
    $this->label = l::get('fields.date.label', 'Date');
    $this->format = 'Y-m-d';
  }

  public function value() {
    $value = $this->override()
      ? $this->default() 
      : parent::value();

    if ($value === 'now') {
      return date($this->format(), time());
    }

    if (empty($value) || strtotime($value) === false) {
      return $value;
    }

    return date($this->format, strtotime($value));
  }

    public function validate() {
      $value = $this->value();

      return date($this->format, strtotime($value)) === $value;
    }

}
