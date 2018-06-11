<?php
use Illuminate\Database\Capsule\Manager as Capsule;

class CreateAssetsLiabilitesBreakdownTable extends Capsule
{

    public function up()
    {
        $this::schema()->create('assetsliabilitesbreakdowns', function ($table) {
            $table->increments('id');
            $table->unsignedInteger('lender_id');
            $table->foreign('lender_id')
                ->references('id')
                ->on('lenders');
            $table->decimal('investments', 18, 2);
            $table->decimal('rrsp', 18, 2);
            $table->decimal('principalresource', 18, 2);
            $table->decimal('mortgages', 18, 2);
            $table->decimal('loans', 18, 2);
            $table->decimal('other', 18, 2);
            $table->decimal('totalassets', 18, 2);
            $table->decimal('totalliabilites', 18, 2);
            $table->decimal('totalnetwork', 18, 2);
            $table->dateTime('updated_at');
        });
    }

    public function drop()
    {
        $this::schema()->drop('assetsliabilitesbreakdowns');
    }
}
