<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();

            $table->string('slug')->unique();

            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            // Модель автомобиля
            $table->bigInteger('brand_id')->unsigned();
            $table->foreign('brand_id')->references('id')->on('car_brands')->onDelete('cascade');

            // Марка автомобиля
            $table->bigInteger('manufacturer_id')->unsigned();
            $table->foreign('manufacturer_id')->references('id')->on('manufacturers')->onDelete('cascade');

            // Статус продажи
            $table->bigInteger('sale_status_id')->unsigned();
            $table->foreign('sale_status_id')->references('id')->on('sale_statuses')->onDelete('cascade');

            // Тип сделки
            $table->bigInteger('type_transaction_id')->unsigned();
            $table->foreign('type_transaction_id')->references('id')->on('type_transactions')->onDelete('cascade');

            // Архив
            $table->boolean('archive')->default(false);

            // Начальная цена
            $table->integer('initial_price')->nullable();
            // Шаг аукциона
            $table->integer('auction_step')->nullable();
            // Своя цена
            $table->integer('its_price')->nullable();
            // Блиц цена
            $table->integer('blitz_price')->nullable();

            $table->integer('platform_id')->nullable();

            $table->string('lot', 100)->unique();

            // Продвижение
            $table->boolean('is_promoted')->default(false);
            $table->boolean('how_to_show')->default(1);
            $table->boolean('main_page')->default(false);

            // Приватный
            $table->boolean('private')->default(false);

            // Specifications
            $table->integer('year')->nullable();
            $table->tinyInteger('rudder_id')->nullable();
            $table->integer('mileage')->nullable();
            $table->float('volume', 3, 1)->nullable();
            $table->integer('transmission_id')->nullable();
            $table->integer('power')->nullable();
            $table->tinyInteger('engine_id')->nullable();
            $table->string('colour')->nullable();
            $table->integer('drive_id')->nullable();

            // Преимущества
            $table->json('advantages')->nullable();

            //evaluation
            $table->float('body',  3, 1)->nullable();
            $table->float('salon', 3, 1)->nullable();
            $table->float('engine', 3, 1)->nullable();
            $table->float('gearbox', 3, 1)->nullable();
            $table->float('pendant', 3, 1)->nullable();

            $table->text('description')->nullable();
            $table->timestamp('end_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
