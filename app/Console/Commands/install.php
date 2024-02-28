<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use File;
use TCG\Voyager\VoyagerServiceProvider;
use Illuminate\Support\Facades\DB;

class install extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'template:install
                            {--r|reset : Reset database}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install LaravelTemplate';

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
        $connection = mysqli_connect(env('DB_HOST'), env('DB_USERNAME'), env('DB_PASSWORD'));
        $database = $connection->query("SELECT SCHEMA_NAME FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME = '".env('DB_DATABASE')."'");
        if(!$database->num_rows){
            $connection->query("CREATE DATABASE ".env('DB_DATABASE'));
            $this->info("Base de datos creada");
        }
        
        $empty_database = false;
        try {
            DB::table('users')->first();
        } catch (\Throwable $th) {
            $empty_database = true;
        }
        if($empty_database  || $this->option('reset')){
            $this->call('key:generate');
            $this->call('migrate:fresh');
            $this->call('db:seed', ['--class' => 'TemplateSeeder']);
            $this->call('storage:link');
            $this->call('vendor:publish', ['--provider' => VoyagerServiceProvider::class, '--tag' => ['config', 'voyager_avatar']]);
            $this->info('Gracias por instalar laravel template');
        }else{
            $this->error('Ya se encuentra instalado');
        }
    }
}
