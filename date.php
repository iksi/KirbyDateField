<?php

class DateField extends InputField
{
    public function __construct()
    {
        $this->icon = 'calendar-o';
    }

    public function value()
    {
        if (empty($this->value) || $this->value === 'now') {
            return date('Y-m-d', strtotime('now'));
        }

        return $this->value;
    }

    public function input()
    {
        $input = parent::input();

        $input->attr('maxlength', 10);

        return $input;
    }

    public function validate()
    {
        if ( (bool) preg_match('/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/', $this->value())) {
            list($year, $month, $day) = explode('-', $this->value());

            return checkdate($month, $day, $year);
        }
        
        return false;
    }

}
