<?php


class HH
{
    use TSingleton;

    private $observer;
    private $allVacancy;

    public function addObserver(IUserObserver $user)
    {
        $this->observer[] = $user;
    }

    public function removeObserver(IUserObserver $users)
    {
        foreach ($this->observer as $key => $obsrv) {

            if ($obsrv === $users) {
                unset ($this->observer[$key]);
            }
        }
    }

    public function setVacancy($vacancy)
    {
        $this->allVacancy[] = $vacancy;
        $this->notify($vacancy->getNameVacancy());
    }

    public function notify($nameVacancy)
    {
        foreach ($this->observer as $user) {
            $user->sendEmail($nameVacancy);
        }

    }


}