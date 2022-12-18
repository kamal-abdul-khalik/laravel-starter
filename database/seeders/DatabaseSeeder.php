<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use App\Models\Permission;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Ask for db migration refresh, default is no
        if ($this->command->confirm('Dengan melakukan db:seed, maka seluruh data dalam database akan terhapus !')) {
            // Call the php artisan migrate:refresh
            $this->command->call('migrate:refresh');
            $this->command->warn("Semua data dalam database telah terhapus.");
        }

        // Seed the default permissions
        $permissions = Permission::defaultPermissions();

        foreach ($permissions as $perms) {
            Permission::firstOrCreate(['name' => $perms]);
        }

        $this->command->info('Perizinan default di tambahkan.');

        // Confirm roles needed
        if ($this->command->confirm('Anda ingin membuat peran baru? [Y|N]', true)) {

            // Ask for roles from input
            $input_roles = $this->command->ask('Inputkan peran dan pisahkan dengan koma.', 'superadmin,penulis');

            // Explode roles
            $roles_array = explode(',', $input_roles);

            // add roles
            foreach ($roles_array as $role) {
                $role = Role::firstOrCreate(['name' => trim($role)]);

                if ($role->name == 'superadmin') {
                    // assign all permissions
                    $role->syncPermissions(Permission::all());
                    $this->command->info('superadmin, sukses memiliki seluruh peran');
                } else {
                    // for others by default only read access
                    $role->syncPermissions(Permission::where('name', 'LIKE', 'view_%')->get());
                }

                // create one user for each role
                $this->createUser($role);
            }

            $this->command->info('Peran ' . $input_roles . ' sukses ditambahkan');
        } else {
            Role::firstOrCreate(['name' => 'penulis']);
            $this->command->info('Menambahkan peran default untuk peran penulis.');
        }

        $this->call([
            // CategorySeeder::class,
        ]);
    }


    /**
     * Create a user with given role
     *
     * @param $role
     */
    private function createUser($role)
    {
        $user = User::factory()->create();
        $user->assignRole($role->name);

        if ($role->name == 'superadmin') {
            $this->command->info('Harap dicatat, ini adalah informasi login dari superadmin: ');
            $this->command->warn('Email: ' . $user->email);
            $this->command->warn('Username: ' . $user->username);
            $this->command->warn('Password: password');
        }
    }
}
