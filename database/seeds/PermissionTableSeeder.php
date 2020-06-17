<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;


class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        Spatie\Permission\Models\Permission::truncate();
        $user = Permission::create([
            'name' => 'developer-access',
            'description' => 'For developer only',
        ]);
        $user = Permission::create([
            'name' => 'BlogCategories-create',
            'description' => 'Create a BlogCategories',
        ]);
        $user = Permission::create([
        	'name' => 'BlogCategories-edit',
        	'description' => 'Edit or Update BlogCategories	',
        ]);
        $user = Permission::create([
        	'name' => 'BlogCategories-delete',
        	'description' => 'Delete Blog Categories',
        ]);
        $user = Permission::create([
        	'name' => 'Call Request	',
        	'description' => 'Watch call request form Employee		',
        ]);
        $user = Permission::create([
        	'name' => 'Employee Change	',
        	'description' => 'Accept profile Change Request form Employee		',
        ]);
        $user = Permission::create([
        	'name' => 'Manage Admin Setting',
        	'description' => 'Site Title/Meta Keyword/Meta Description/Site email etc	',
        ]);
        $user = Permission::create([
        	'name' => 'Manage Advertisement',
        	'description' => 'User can add/edit and position the advertisements	',
        ]);
        $user = Permission::create([
        	'name' => 'Manage Blog',
        	'description' => 'Can create/update/delete blog	',
        ]);
        $user = Permission::create([
        	'name' => 'Manage Categories',
        	'description' => 'User can add/edit/delete categories	',
        ]);
        $user = Permission::create([
        	'name' => 'Manage Clients',
        	'description' => 'Add/Edit Clients	',
        ]);
        $user = Permission::create([
        	'name' => 'Manage CMS',
        	'description' => 'User can update Generals(about/terms/privacy/services0 etc contents	',
        ]);
        $user = Permission::create([
        	'name' => 'Manage Database Sear',
        	'description' => 'Manage Database Search Resource	',
        ]);
        $user = Permission::create([
        	'name' => 'Manage Email Templat',
        	'description' => 'Update email template content/design	',
        ]);
        $user = Permission::create([
        	'name' => 'Manage Emails',
        	'description' => 'Send emails to employers/seekers/individuals	',
        ]);
        $user = Permission::create([
        	'name' => 'Manage Employers',
        	'description' => 'View/Edit/Delete Employers	',
        ]);
        $user = Permission::create([
        	'name' => 'Manage Faq',
        	'description' => 'User can manage FAQ list	',
        ]);
        $user = Permission::create([
        	'name' => 'Manage JobBoard',
        	'description' => 'Can create/update/delete jobboard	',
        ]);
        $user = Permission::create([
        	'name' => 'Manage Jobs',
        	'description' => 'Add/Edit/Jobs (Hot/recent/free/employers)	',
        ]);
        $user = Permission::create([
        	'name' => 'Manage Jobseekers',
        	'description' => 'View/Edit/Delete Jobseekers	',
        ]);
        $user = Permission::create([
        	'name' => 'Manage Leave',
        	'description' => 'Approve or Reject leave for employee	',
        ]);
        $user = Permission::create([
        	'name' => 'Manage Locations',
        	'description' => 'User can add/edit/delete locations	',
        ]);
        $user = Permission::create([
        	'name' => 'Manage Newspaper Job',
        	'description' => 'Add/Update/Delete Newspaper jobs	',
        ]);
        $user = Permission::create([
        	'name' => 'Manage Report',
        	'description' => 'Jobs and employee Reports	',
        ]);
        $user = Permission::create([
        	'name' => 'Manage Users',
        	'description' => 'Add/Update/Delete/Set Privileges to users	',
        ]);

        $user = Permission::create([
        	'name' => 'Service Request',
        	'description' => 'Employee Request for service form Employee dashboard	',
        ]);



    }
}
