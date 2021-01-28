<?php
namespace App\Console\Commands;

use App\Models\User;
use App\Models\Role;
use Illuminate\Console\Command;
use Illuminate\Support\Env;

class MakeAdmin extends Command
{
/**
* The name and signature of the console command.
*
* @var string
*/
protected $signature = 'make:adminuser {userid}';

/**
* The console command description.
*
* @var string
*/
protected $description = 'Set the user up for admin rights';

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
$id = $this->argument('userid');

if(User::where('id', '=', $id)->exists()){

    $user = User::where('username', $username)->first();
    $user->role();
    $user->role()->associate($role);
    $user->save();

    $filePath = '.env';
    $envUserId = env('USER_ID');
    if ($envUserId){
        file_put_contents($filePath, str_replace('USER_ID = '.$envUserId.'', 'USER_ID = '.$user->id.'', file_get_contents($filePath)));
    }else{
        file_put_contents($filePath, PHP_EOL.'# Dev-login'.PHP_EOL, FILE_APPEND);
        file_put_contents($filePath, 'USER_ID = '.$user->id.'', FILE_APPEND);
    }


$this->line("The user '$username' is ready for the devlogin");

}else{
$this->line("Error: The user '$username' doesn't exist");
}
}
}
