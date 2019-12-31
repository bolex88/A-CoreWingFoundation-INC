@extends('layouts.master')
    
@section('main')

 <style>
  body {
    background-image: url('images/Home4.png');
    min-height: 380px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}
  }
 </style>
<div class="container text-center" style="min-height: 700px;">
                <!-- heading -->
                <div class="row mt-2">
                    <div class="col">
                        <h4 class="pull-xs-left">
                            FORM SPECIMEN <br>
                      A-  COR WING FOUNDATION INC
                        </h4> <br />
                        <h3>PLEASE PRINT IN CAPITALS</h3>
                    </div>
                </div> <br/>
                
                <!-- ================ Add Product form ==================== -->
                <form action="{{route('forms.save')}}" method="post" id="upload_image" enctype="multipart/form-data">
                    <div class="form-group text-left">
                        {{csrf_field()}}
                            <div class="row my-2">
                                <div class="col-md-6">
                                    <div class="input-group control-group increment">
                                        <span class="input-group-btn">
                                            <span class="btn btn-info btn-file">
                                                <input type="file" name="image">
                                            </span>
                                        </span>
                                    </div>
                                </div>
                            </div><br> <br>
                             <b><label>Last Name:</label></b><input type="text" name="Last_Name"><b><label>Middle Name:</label></b><input type="text" name="Middle_Name"><b><label>First Name:</label></b><input type="text"name="First_Name"><b><label>Contact Number:</label></b><input type="Phone_number" name="Contact_Number"> <br> <br>
                             <b><label>Organization Name:</label></b><input type="text" name="Organization_Name"><br> <br>
                             <b><label>Organization Head:</label></b><input type="text" name="Organization_Head"> <br> <br>
                             <b><label>Country of Origin:</label></b><input type="text" name="Country_Origin"> <br> <br>
                             <b><label>Type of Business:</label></b><input type="text" name="Business_Type"> <br> <br>
                             <b><label>Business Area:</label></b><input type="text" name="Business_Area"> <br> <br>
                             <b><label>Organization Address:</label></b><input type="text" name="Organization_Address"> <br /> <br>
                             <b><label>House / Office Address:</label></b><input type="text" name="Address"> <br> <br>
                             <h4 class="h4 text-left my-2">Next of Kin:</h4><hr>
                             <b><label>Last Name:</label></b><input type="text" name="LastName"><b><label>Middle Name:</label></b><input type="text" name="MiddleName"><b><label>First Name:</label></b><input type="text"name="FirstName"><b><label>Age:</label></b><input type="data-target" name="Age"> <br> <br>
                             <label>Nationality:</label></b><input type="text"name="Nationality"><br><br>
                             <b><label>Date of Birth:</label></b><input type="date"name="Birth_Date"><b><label>Age:</label></b><input type="data-target" name="Ages"><br> <br>
                             <label>Referee (First):</label></b><input type="text"name="First_Referee"><b><label>Phone Number:</label></b><input type="Phone_number" name="FirstRef_Contact"><br> <br>
                             <label>Referee (Second):</label></b><input type="text"name="Second_Referee"><b><label>Phone Number:</label></b><input type="Phone_number" name="SecondRef_Contact"><br> <br>
                             <label>Operating Bank Name (if any):</label></b><input type="text"name="Operating_Bank"><br> <br>
                             <label>Marital Status:</label>
                             Single: <input type="checkbox" id="myCheck" onclick="myFunction()">
                                <p id="text" style="display:none">Checkbox is CHECKED!</p>Married: <input type="checkbox" id="myCheck" onclick="myFunction()">
                                <p id="text" style="display:none">Checkbox is CHECKED!</p>Divorce: <input type="checkbox" id="myCheck" onclick="myFunction()">
                                <p id="text" style="display:none">Checkbox is CHECKED!</p><br>

                             <h4 class="h4 text-left my-2">Chosen Bank (ACWF): </h4><hr>
                             <b><label>Bank Name:</label></b><input type="text" name="Bank_Name"><b><label>Account Number:</label></b><input type="number" name="Account_Number"> <br> <br>

                              <label>Statutory Position:</label>
                             Less Privileged: <input type="checkbox" id="myCheck" onclick="myFunction()">
                                <p id="text" style="display:none">Checkbox is CHECKED!</p> Student: <input type="checkbox" id="myCheck" onclick="myFunction()">
                                <p id="text" style="display:none">Checkbox is CHECKED!</p>Aged: <input type="checkbox" id="myCheck" onclick="myFunction()">
                                <p id="text" style="display:none">Checkbox is CHECKED!</p>Farmer: <input type="checkbox" id="myCheck" onclick="myFunction()">
                                <p id="text" style="display:none">Checkbox is CHECKED!</p> Manufacturer: <input type="checkbox" id="myCheck" onclick="myFunction()">
                                <p id="text" style="display:none">Checkbox is CHECKED!</p> Business: <input type="checkbox" id="myCheck" onclick="myFunction()">
                                <p id="text" style="display:none">Checkbox is CHECKED!</p><br>


                             <p>I attest that every information given in this form is all correct and true. And agree to abide, Work in accordance to the policy of this organization.</p>

                      <button class="btn btn-primary btn-lg">Submit Form</button>
            </div>
          </form>


@endsection