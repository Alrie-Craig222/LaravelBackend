<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReceiptModel extends Model
{
    use HasFactory;
    /**
		*The table associated with the model
		*
		*@var string
		*/
		protected $table = 'tablename_in_the_database(tableplus)';
		
		/**
		*The primary key associated with the model
		*
		*@var string
		*/
		protected $primaryKey = 'PrimaryKey_in_table_in_the_database(tableplus)';

		/**
		*The attributes that are mass assignable
		*
		*@var array
		*/
		protected $fillable = [
					customerID,
					customer_name,
					imagepath,
					description,
					user_id,];

    }