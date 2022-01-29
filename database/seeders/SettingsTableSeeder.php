<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('settings')->delete();
        
        \DB::table('settings')->insert(array (
            0 => 
            array (
                'id' => 1,
                'project_title' => 'eClass - Learning Management System',
                'logo' => 'logo.png',
                'favicon' => 'favicon.png',
                'cpy_txt' => 'Copyright © 2020 eClass.',
                'logo_type' => 'L',
                'rightclick' => 0,
                'inspect' => 0,
                'meta_data_desc' => NULL,
                'meta_data_keyword' => NULL,
                'google_ana' => NULL,
                'fb_pixel' => NULL,
                'fb_login_enable' => 0,
                'google_login_enable' => 0,
                'gitlab_login_enable' => 0,
                'stripe_enable' => 0,
                'instamojo_enable' => 0,
                'paypal_enable' => 0,
                'paytm_enable' => 0,
                'braintree_enable' => 0,
                'razorpay_enable' => 0,
                'paystack_enable' => 0,
                'w_email_enable' => 0,
                'verify_enable' => 0,
                'wel_email' => 'admin@mediacity.co.in',
                'default_address' => 'Comapny 12345 South Main Street Anywhere',
                'default_phone' => '9123456789',
                'instructor_enable' => 1,
                'debug_enable' => 1,
                'created_at' => NULL,
                'updated_at' => '2020-02-06 10:24:31',
            ),
        ));
        
        
    }
}