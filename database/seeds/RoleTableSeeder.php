<?php

use App\Role;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->truncate();

        $this->makeRoles([
            'admin',
            'manager',
            'employee',
        ]);
    }

    private function makeRoles(array $names)
    {
        foreach ($names as $name) {
            $role = new Role();

            $role->name = $name;

            switch ($name) {
                case 'admin':
                    $role->description = 'An admin have all privileges';
                    break;
                case 'manager':
                    $role->description = 'A manager have complete CRUD except arrivals. Arrivals are read-only.';
                    break;
                case 'employee':
                    $role->description = 'An employee can only edit arrivals. Other things are read-only.';
                    break;

                default:
                    $role->description = 'No description.';
                    break;
            }

            $role->save();
        }
    }
}
