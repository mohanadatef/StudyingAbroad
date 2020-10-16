<?php
use Illuminate\Support\Facades\DB;
use App\Permission;
use Illuminate\Database\Seeder;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Permission::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        $permissions=[
            //user_list
            [
                'name'=>'user-list',
                'display_name'=>'user list',
                'description'=>'list user',
            ],
            //user
            [
                'name'=>'user-show',
                'display_name'=>'show user',
                'description'=>'show data in user',
            ],
            [
                'name'=>'user-create',
                'display_name'=>'create user',
                'description'=>'create data in user',
            ],
            [
                'name'=>'user-edit',
                'display_name'=>'edit user',
                'description'=>'edit data in user',
            ],
            [
                'name'=>'user-delete',
                'display_name'=>'delete user',
                'description'=>'delete data in user',
            ],
            [
                'name'=>'user-password',
                'display_name'=>'password user',
                'description'=>'password data in user',
            ],
            [
                'name'=>'user-dactive',
                'display_name'=>'dactive user',
                'description'=>'dactive data in user',
            ],
            //role
            [
                'name'=>'role-show',
                'display_name'=>'show role',
                'description'=>'show data in role',
            ],
            [
                'name'=>'role-create',
                'display_name'=>'create role',
                'description'=>'create data in role',
            ],
            [
                'name'=>'role-edit',
                'display_name'=>'edit role',
                'description'=>'edit data in role',
            ],
            [
                'name'=>'role-delete',
                'display_name'=>'delete role',
                'description'=>'delete data in role',
            ],
            //permission
            [
                'name'=>'permission-show',
                'display_name'=>'permission show',
                'description'=>'show permission',
            ],
            [
                'name'=>'permission-create',
                'display_name'=>'create permission',
                'description'=>'create data in permission',
            ],
            [
                'name'=>'permission-edit',
                'display_name'=>'edit permission',
                'description'=>'edit data in permission',
            ],
            [
                'name'=>'permission-delete',
                'display_name'=>'delete permission',
                'description'=>'delete data in permission',
            ],
            //dashboard
            [
                'name'=>'dashboard-show',
                'display_name'=>'dashboard show',
                'description'=>'show dashboard',
            ],
            //setting_list
            [
                'name'=>'setting-list',
                'display_name'=>'setting list',
                'description'=>'list setting',
            ],
            //about us
            [
                'name'=>'about-us-show',
                'display_name'=>'show about us',
                'description'=>'show data in about us',
            ],
            [
                'name'=>'about-us-create',
                'display_name'=>'create about us',
                'description'=>'create data in about us',
            ],
            [
                'name'=>'about-us-edit',
                'display_name'=>'edit about us',
                'description'=>'edit data in about us',
            ],
            //contact us
            [
                'name'=>'contact-us-show',
                'display_name'=>'show contact us',
                'description'=>'show data in contact us',
            ],
            [
                'name'=>'contact-us-create',
                'display_name'=>'create contact us',
                'description'=>'create data in contact us',
            ],
            [
                'name'=>'contact-us-edit',
                'display_name'=>'edit contact us',
                'description'=>'edit data in contact us',
            ],
            //setting
            [
                'name'=>'setting-show',
                'display_name'=>'show setting',
                'description'=>'show data in setting',
            ],
            [
                'name'=>'setting-create',
                'display_name'=>'create setting',
                'description'=>'create data in setting',
            ],
            [
                'name'=>'setting-edit',
                'display_name'=>'edit setting',
                'description'=>'edit data in setting',
            ],
            //home slider
            [
                'name'=>'home-slider-show',
                'display_name'=>'show home slider',
                'description'=>'show data in home slider',
            ],
            [
                'name'=>'home-slider-create',
                'display_name'=>'create home slider',
                'description'=>'create data in home slider',
            ],
            [
                'name'=>'home-slider-edit',
                'display_name'=>'edit home slider',
                'description'=>'edit data in home slider',
            ],
            [
                'name'=>'home-slider-delete',
                'display_name'=>'delete home slider',
                'description'=>'delete data in home slider',
            ],
        ];
        foreach ($permissions as $key=>$value)
        {
            Permission::create($value);
        }
    }
}
