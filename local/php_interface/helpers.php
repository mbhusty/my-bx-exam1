<?
use Bitrix\Main\Type\DateTime;

function work_hours($workhourStart = 9, $workhourEnd = 18, $dateTime = null)
{
    if (!$dateTime){
        $dateTime = new DateTime();
    }
    $currentHour = $dateTime->toUserTime()->format('H');
    if ($currentHour >= $workhourStart && $currentHour < $workhourEnd){
        return true;
    }
    return false;
}