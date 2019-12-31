<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
    	'image', 'Last_Name', 'Middle_Name', 'First_Name', 'Contact_Number',
    	'Organization_Name', 'Organization_Head', 'Country_Origin',
    	'Business_Type', 'Business_Area', 'Organization_Address',
    	'Address', 'LastName', 'MiddleName', 'FirstName',
    	'Age', 'Nationality', 'Birth_Date', 'Ages', 'First_Referee',
    	'FirstRef_Contact', 'Second_Referee', 'SecondRef_Contact',
    	'Operating_Bank', 'Marital_Status', 'Bank_Name', 'Account_Number', 
    	'Statutory_Position',
    ];
}
