<?php namespace App\Database\Seeds;
  
class UserSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $data = [
            [
                'username' => 'admin',
                'email'    => 'admin@example.com',
                'password' => password_hash('123', PASSWORD_DEFAULT)
            ],
        ];
        $this->db->table('user')->insertBatch($data);
    }
}