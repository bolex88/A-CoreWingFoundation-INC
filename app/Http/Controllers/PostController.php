<?php

namespace App\Http\Controllers;
use App\Contact;
use App\Comment;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function showAddForm(){
        return view('Post.add-form');
    }

    public function addForm(Request $request){
    	$image = $request->image;
    	$Last_Name = $request->Last_Name; 
    	$Middle_Name = $request->Middle_Name; 
    	$First_Name = $request->First_Name;
    	$Contact_Number = $request->Contact_Number;
    	$Organization_Name = $request->Organization_Name;
    	$Organization_Head = $request->Organization_Head;
    	$Country_Origin = $request->Country_Origin;
    	$Business_Type = $request->Business_Type;
    	$Business_Area = $request->Business_Area;
    	$Organization_Address = $request->Organization_Address;
    	$Address = $request->Address;
    	$LastName = $request->LastName;
    	$MiddleName = $request->MiddleName;
    	$FirstName = $request->FirstName;
    	$Age = $request->Age;
    	$Nationality = $request->Nationality;
    	$Birth_Date = $request->Birth_Date;
    	$Ages = $request->Ages;
    	$First_Referee = $request->First_Referee;
    	$FirstRef_Contact = $request->FirstRef_Contact;
    	$Second_Referee = $request->Second_Referee;
    	$SecondRef_Contact = $request->SecondRef_Contact;
    	$Operating_Bank = $request->Operating_Bank;
        $Marital_Status = $request->Marital_Status;
    	$Bank_Name =  $request->Bank_Name;
    	$Account_Number = $request->Account_Number;
        $Statutory_Position = $request->Statutory_Position;
    	Post::create(['image'=>$image, 'Last_Name'=>$Last_Name, 'Middle_Name'=>$Middle_Name, 
    					'First_Name'=>$First_Name, 'Contact_Number'=>$Contact_Number, 
    					'Organization_Name'=>$Organization_Name,
    					'Organization_Head'=>$Organization_Head, 'Country_Origin'=>$Country_Origin,
    					'Business_Type'=>$Business_Type, 'Business_Area'=>$Business_Area, 
    					'Organization_Address'=>$Organization_Address, 'Address'=>$Address,
                        'LastName'=>$LastName, 'MiddleName'=>$MiddleName, 'FirstName'=>$FirstName, 'Age'=>$Age,
    					'Nationality'=>$Nationality, 'Birth_Date'=>$Birth_Date, 'Ages'=>$Ages,
    					'First_Referee'=>$First_Referee, 'FirstRef_Contact'=>$FirstRef_Contact, 
    					'Second_Referee'=>$Second_Referee, 'SecondRef_Contact'=>$SecondRef_Contact, 
    					'Operating_Bank'=>$Operating_Bank, 'Marital_Status'=>$Marital_Status,
                        'Bank_Name'=>$Bank_Name, 'Account_Number'=>$Account_Number, 'Statutory_Position'=>$Statutory_Position]);
    	return redirect('Post.checkout-form');
   	}

   	public function Contacts(Request $request){
   		$name = $request->name;
   		$email = $request->email;
   		$comments = $request->comments;
   		Contact::create(['name'=>$name, 'email'=>$email, 'comments'=>$comments]);
   		return redirect('/');
   	}

    //public function Blog() {
        //return view('Post.blog');
    //}

    public function CheckOutForm(){
        return view('Post.checkout-form');
    }

    public function Comments(Request $request){
        $name = $request->name;
        $email = $request->email;
        $message = $request->message;
        Comment::create(['name'=>$name, 'email'=>$email, 'message'=>$message]);
        return redirect('/blog');
    }
}
