<?php

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
        // $this->call(UsersTableSeeder::class);
        $this->call(CargosTableSeeder::class);         
        $this->call(UsersTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(TagsTableSeeder::class);
        $this->call(PostsTableSeeder::class);

        $this->call(GruposTableSeeder::class);
        $this->call(SubgruposTableSeeder::class);
        $this->call(ArticulosTableSeeder::class);
        
        $this->call(MarcasTableSeeder::class);
        $this->call(ColoresTableSeeder::class);
        $this->call(DepartamentosSeederTable::class);
        $this->call(InventariosSeederTable::class);
       

    }
}
