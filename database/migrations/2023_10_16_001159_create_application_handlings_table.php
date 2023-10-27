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
        Schema::create('application_handlings', function (Blueprint $table) {
            $table->id();
           $table->string("application_status");
           $table->string("application_user_id");
           $table->string("transaction_status");
           $table->string("application_date");
           $table->string("contract_document");
           $table->string("desired_amount");
           $table->string("transfer_amount");
           $table->string("settlement_mount");
           $table->string("purchase_amount");
           $table->string("contract_date");
           $table->string("Items_purchase");
           $table->string("Items_photo");
           $table->string("contract_name");
           $table->string("contract_settlement_date");
           $table->string("contract_settlement_amount");
           $table->string("contract_amount");
           $table->string("contract_date_day");
           $table->string("contract_address");
           $table->string("signature_name");
           $table->string("signature_date");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('application_handlings');
    }
};
