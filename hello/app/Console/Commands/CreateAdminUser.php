<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class CreateAdminUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:CreateAdminUser';

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

        $email = $this->ask('What is your email?');
        $name = $this->ask('What is your name?');
        $password =  $this->ask('What is password?');



        $user =  User::create([
            'name' => $name,
            'email' => $email,
            'is_admin' => false,
            'password' => bcrypt($password)
        ]);

        dump('User Have been create:');
        dump($user->toArray());

        return 0;
    }
}
