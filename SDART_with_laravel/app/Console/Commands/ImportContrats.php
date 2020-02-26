<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;


class ImportContrats extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'importation:Contrats';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Importez le fichier .sql pour peupler la table';

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
     * @return mixed
     */
    public function handle()
    {
        DB :: unprepared (file_get_contents ('database/seeds/contrats.sql'));
    }
}
