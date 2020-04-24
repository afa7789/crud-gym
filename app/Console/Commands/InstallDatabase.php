<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Database\Seeder;

use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class InstallDatabase extends Command
{

	/**
	 * The console command signature.
	 *
	 * @var string
	 */
	protected $signature = 'database:install';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Instala o banco de dados';

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

		$sqlContent = file_get_contents(resource_path("sql/DataBase.sql"));
		\DB::unprepared($sqlContent);
		\Log::info('Database created');
	}
}
