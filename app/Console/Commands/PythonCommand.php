<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class PythonCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:name';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        //exec("Rscript  app/RCommands/test.r", $out);
        exec("python app/PythonCommands/graph1.py", $out);
        return ($out);
    }
}
