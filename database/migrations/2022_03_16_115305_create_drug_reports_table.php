<?php

use App\Models\Drug;
use App\Models\Polies;
use App\Models\Queue;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drug_reports', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Queue::class);
            $table->foreignIdFor(Polies::class);
            $table->foreignIdFor(Drug::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('drug_reports');
    }
};
