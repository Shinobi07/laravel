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
        Schema::create('user_infos', function (Blueprint $table) {
            $table->id();
            $table->integer("user_id");
            $table->string("user_status");
            $table->string("note");
            $table->string("signup_at");
            $table->string("modified_at");
            $table->string("last_login_at");
            $table->string("num_login");
            $table->string("ad_code");
            $table->string("name");
            $table->string("name_furigana");
            $table->string("age");
            $table->string("address");
            $table->string("gender");
            $table->string("birth");
            $table->string("homephone_number");
            $table->string("mail");
            $table->string("phone_number");
            $table->string("line");
            $table->string("password");
            $table->string("companies");
            $table->string("companies_address");
            $table->string("work_phonenumber");
            $table->string("employment");
            $table->string("length_employees");
            $table->string("monthly_income");
            $table->string("payment_method");
            $table->string("emergency_contact_name");
            $table->string("relationship_emergency");
            $table->string("relationship_emergency_phonenumber");
            $table->string("name_factoring_past");
            $table->string("name_factoring_recent");
            $table->string("name_pay_later");
            $table->string("name_buyer");
            $table->string("desired_amount");
            $table->string("health_insurance");
            $table->string("required_documents");
            $table->string("contract_date");
            $table->string("transfer_amount");
            $table->string("settlement_amount");
            $table->string("purchase_amount");
            $table->string("settlement_date");
            $table->string("confirmation_previousday");
            $table->string("items_purchase");
            $table->string("method_purchase");
            $table->string("bank_name");
            $table->string("bank_branch_name");
            $table->string("bank_account_type");
            $table->string("bank_account_num");
            $table->string("bank_accountholder");
            $table->string("confirmation_previousday_status");
            $table->string("re_purchase");
            $table->string("delete_at");
            $table->string("transaction_status");
            $table->string("user_modify");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_infos');
    }
};
