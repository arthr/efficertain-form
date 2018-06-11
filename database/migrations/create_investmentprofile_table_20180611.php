<?php
use Illuminate\Database\Capsule\Manager as Capsule;

class CreateInvestmentProfileTable extends Capsule
{

    public function up()
    {
        $this::schema()->create('investmentprofiles', function ($table) {
            $table->increments('id');
            $table->unsignedInteger('lender_id');
            $table->foreign('lender_id')
                ->references('id')
                ->on('lenders');
            $table->decimal('ammi', 18, 2);
            $table->string('approximateincome', 200);
            $table->string('appoximatenetworth', 200);
            $table->string('investmentobjectives', 200);
            $table->string('timehorizon', 200);
            $table->string('mortgagelendingexperience', 200);
            $table->string('otherobjectives', 200);
            $table->string('mortgageknowledge', 200);
            $table->string('risktolerance', 200);
            $table->dateTime('updated_at');
        });
    }

    public function drop()
    {
        $this::schema()->drop('investmentprofiles');
    }
}
