<?php


class RefCommand extends Command
{

    private String $filename;
    private Operation $operation;


    public function __construct(string $filename, Operation $operation)
    {
        $this->$filename = $filename;
        $this->operation = $operation;
    }


    public function execute()
    {
        $this->operation->operation($this->filename);
    }

    public function unExecute()
    {
        // TODO: Implement unExecute() method.
    }

    public function logging()
    {
        $file = fopen("log.txt", "a+");
        fputs($file, date("H:i:s:d") . $this->operation->getOperation() . PHP_EOL);
        fclose($file);

    }

}