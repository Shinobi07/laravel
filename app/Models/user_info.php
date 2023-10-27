<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_info extends Model
{
    protected $primaryKey = 'user_id';
    public $timestamps = false;


    protected $fillable = [
        'user_id',
        'user_status',
        'note',
        'signup_at',
        'modified_at',
        'last_login_at',
        'num_login',
        'ad_code',
        'name',
        'name_furigana',
        'age',
        'address',
        'gender',
        'birth',
        'homephone_number',
        'mail',
        'phone_number',
        'line',
        'password',
        'companies',
        'companies_address',
        'work_phonenumber',
        'employment',
        'length_employees',
        'monthly_income',
        'payment_method',
        'emergency_contact _name',
        'relationship_emergency',
        'relationship_emergency_phonenumber',
        'name_factoring_past',
        'name_factoring_recent',
        'name_pay_later',
        'name_buyer',
        'desired_amount',
        'health_insurance',
        'required_documents',
        'contract_date',
        'transfer_amount',
        'settlement_amount',
        'purchase_amount',
        'settlement_date',
        'confirmation_previousday',
        'items_purchase',
        'method_ purchase',
        'bank_name',
        'bank_branch_name',
        'bank_account_type',
        'bank_account_num',
        'bank_accountholder',
        'confirmation_previousday_status',
        're_purchase',
        'delete_at',
        'user_modify',
    ];
    use HasFactory;
}
