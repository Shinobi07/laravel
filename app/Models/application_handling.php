<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class application_handling extends Model
{
    protected $primaryKey = 'application_status';
    public $timestamps = false;
    protected $fillable = [
        'application_status',
        'application_user_id',
        'transaction_status',
        'application_date',
        'contract_document',
        'desired_amount',
        'transfer_amount',
        'settlement_mount',
        'purchase_amount',
        'contract_date',
        'Items_purchase',
        'Items_photo',
        'contract_name',
        'contract_settlement_date',
        'contract_settlement_amount',
        'contract_amount',
        'contract_date_day',
        'contract_address',
        'signature_name',
        'signature_date',
    ];
    use HasFactory;
}
