<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $author = Role::create([
            'name' => 'Author', 
            'slug' => 'author',
            'permissions' => [
                'create-post' => true,
            ]
        ]);
        $editor = Role::create([
            'name' => 'Editor', 
            'slug' => 'editor',
            'permissions' => [
                'update-post' => true,
                'publish-post' => true,
            ]
        ]);

        $admin = Role::create([
            'name' => 'Administrator', 
            'slug' => 'admin',
            'permissions' => [
                'create-roles' => true,
                'update-roles' => true,
                'delete-roles' => true,
                'view-roles' => true,
            ]
        ]);
    }
}
