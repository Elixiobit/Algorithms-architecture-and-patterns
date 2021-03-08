<?php


class TextEditor
{
    private Operation $operation;
    private array $commands;
    private string $buffer;

    public function __construct(Operation $operation)
    {
        $this->operation = $operation;
    }

    public function action(string $filename)
    {
        $command = new RefCommand($filename, $this->operation);
        $command->execute();

        $this->commands[] = $command;
//        $this->currentCommandNumber++;
    }
}