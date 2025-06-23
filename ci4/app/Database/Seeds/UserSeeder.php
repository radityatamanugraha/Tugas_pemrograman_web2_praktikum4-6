<?php
namespace App\Database\Seeds;
use CodeIgniter\Database\Seeder;
class UserSeeder extends Seeder
{
    public function run()
    {
        $model = model('UserModel');
        $model->insert([
            'username' => 'radit',
            'useremail' => 'raditya@gmail.com',
            'userpassword' => password_hash('radit123', PASSWORD_DEFAULT),
        ]);
    }
}