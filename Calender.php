<?php
class Calender
{
    public function Showdate($month,  $day)
    {
        $data = "2021-" . $month . "-" . $day;
        $unixTimestamp = strtotime($data);
        $dayOfWeek = date("l", $unixTimestamp);
        return $dayOfWeek;
    }
}
