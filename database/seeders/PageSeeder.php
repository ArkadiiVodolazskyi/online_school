<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('page_contents')->truncate();
        DB::table('pages')->truncate();
        Schema::enableForeignKeyConstraints();

        DB::table('pages')->insert([
            'slug' => 'test-page-1',
            'title' => 'Test Page 1',
            'publish' => true,
        ]);
        DB::table('page_contents')->insert([
            'page_id' => 1,
            'type_id' => 1,
            'content' => '<h1>Hello, World!</h1><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</p><h2>Subheader</h2><p>I eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><blockquote>Quote, I guess</blockquote><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
        ]);

        DB::table('pages')->insert([
            'slug' => 'test-page-2',
            'title' => 'Test Page 2',
            'publish' => true,
        ]);
        DB::table('page_contents')->insert([
            'page_id' => 2,
            'type_id' => 1,
            'content' => '<h1>Hello, World!</h1><p><br></p><table class="table table-bordered"><tbody><tr><td>Also</td><td>here</td><td>is</td></tr><tr><td>a</td><td>simple</td><td>table</td></tr></tbody></table><p><br></p>',
        ]);
    }
}
