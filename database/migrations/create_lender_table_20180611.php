<?php
use Illuminate\Database\Capsule\Manager as Capsule;

class CreateLenderTable extends Capsule
{

    public function up()
    {
        $this::schema()->create('lenders', function ($table) {
            $table->increments('id');
            $table->string('name', 200);
            $table->string('email', 200);
            $table->string('telephone', 50);
            $table->string('mobile', 50);
            $table->string('primarycontact', 200);
            $table->string('contactmethod', 200);
            $table->string('identificationtype', 100);
            $table->string('identificationnumber', 150);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function drop()
    {
        $this::schema()->drop('lenders');
    }
}
