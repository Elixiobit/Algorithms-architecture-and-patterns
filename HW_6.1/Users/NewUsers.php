<?php


class NewUsers implements IUserObserver
{
    private String $name;
    private $email;
    private Int $totalExperience;

    public function __construct(String $name, $email, Int $totalExperience)
    {
        $this->name = $name;
        $this->email = $email;
        $this->totalExperience = $totalExperience;
        echo "Пользовательс именем $this->name создан" . PHP_EOL;
    }


    public function startSearch(): void
    {
        HH::getInstance()->addObserver($this);
        echo 'в посиках работы' . PHP_EOL;
    }

    public function endSearch(): void
    {
        HH::getInstance()->removeObserver($this);
        echo 'не хочу работать' . PHP_EOL;
    }

    public function sendEmail(String $nameVacancy): void
    {
        echo "Отправленно уведомление на почту $this->email, открыты новая вакансия $nameVacancy" . PHP_EOL;
    }


}