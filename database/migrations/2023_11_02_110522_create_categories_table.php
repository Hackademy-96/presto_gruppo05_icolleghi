<?php


use App\Models\Category;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('img');
            $table->timestamps();
        });
        $categories=[
        ['name'=>'Smartphone', 'img'=>'/img/Smartphone.jpg'], 
        ['name'=>'Pc', 'img'=>'/img/Pc.jpg'], 
        ['name'=>'Console', 'img'=>'/img/Console.jpg'] , 
        ['name'=>'Tv', 'img'=>'/img/Tv.avif'], 
        ['name'=>'Soundbar', 'img'=>'/img/Soundbar.webp'], 
        ['name'=>'Frigoriferi', 'img'=>'/img/Frigorifero.avif'],
        ['name'=>'Modem', 'img'=>'/img/Modem.jpg'], 
        ['name'=>'Tablet', 'img'=>'/img/Tablet.png'] ,
        ['name'=>'Webcam', 'img'=>'/img/Webcam.jpg'], 
        ['name'=>'Macchine Fotografiche', 'img'=>'/img/Fotocamera.webp'],
    ];
        foreach($categories as $category){
            Category::create([
                'name'=>$category['name'],
                'img'=>$category['img']
            ]);

        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
