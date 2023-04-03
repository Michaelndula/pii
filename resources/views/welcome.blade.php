<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Patient Identification Information</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
        <!-- Styles -->
        <style>
            .ml-4{
                justify-content: center;
            }
            input[type=text] {
                background: transparent;
                border: none;
                border-bottom: 1px solid #000000;
            }
        </style>
    </head>
    <body>
        <div id="root"></div>
        <section class="vh-100 gradient-custom">
            <div class="container py-5 h-100">
                <div class="row justify-content-center align-items-center h-100">
                <div class="col-12 col-lg-9 col-xl-12">
                    <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                    <div class="card-body p-4 p-md-5">
                        <h5 class="mb-4 pb-2 pb-md-0 mb-md-5">1. Patient Identification Information</h5>
                        <form action="http://127.0.0.1:8000/api/patient" method="post">

                        <div class="row">
                            <div class="col-md-2 mb-2">

                            <div class="form-outline">
                                <p>Name: </p>
                            </div>

                            </div>
                            <div class="col-md-2 mb-2">

                            <div class="form-outline">
                                <input type="text" id="last_name" name="last_name" class="form-control form-control-lg" />
                                <label class="form-label" for="last_name">Last Name</label>
                            </div>

                            </div>
                            <div class="col-md-2 mb-2">

                            <div class="form-outline">
                                <input type="text" id="first_name" name="first_name" class="form-control form-control-lg" />
                                <label class="form-label" for="first_Name">First Name</label>
                            </div>

                            </div>
                            <div class="col-md-2 mb-2">

                            <div class="form-outline">
                                <input type="text" id="middle_name_initial" name="middle_name_initial" class="form-control form-control-lg" />
                                <label class="form-label" for="middle_name_initial">Middle Initial</label>
                            </div>

                            </div>
                            <div class="col-md-2 mb-2">

                            <div class="form-outline">
                                <input type="date" id="date_of_birth" name="date_of_birth" class="form-control form-control-lg" />
                                <label class="form-label" for="date_of_birth">Date of Birth</label>
                            </div>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-2 mb-2 d-flex align-items-center">

                            <div class="form-group row">
                                <div class="col-sm-6">Sex:</div>
                                <div class="">
                                    <div class="form-check">
                                    <input class="form-check-input" name="sex" type="checkbox" id="sex">
                                    <label class="form-check-label" for="sex">
                                        Male
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" name="sex" type="checkbox" id="sex">
                                    <label class="form-check-label" for="sex">
                                        Female
                                    </label>
                                    </div>
                                </div>
                                </div>

                            </div>
                        <div class="col-md-2 mb-2 d-flex align-items-center">

                            <div class="form-outline datepicker w-100">
                                <input type="text" name="age" class="form-control form-control-lg" id="age" />
                                <label for="birthdayDate" class="form-label">Age</label>
                            </div>

                        </div>
                        <div class="col-md-4 mb-2">
                            <h6 class="mb-4 pb-1">Race: </h6>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="race" id="femaleGender"
                                value="option1" checked />
                                <label class="form-check-label" for="femaleGender">White</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="race" id="maleGender"
                                value="option2" />
                                <label class="form-check-label" for="maleGender">Black</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="race" id="otherGender"
                                value="option3" />
                                <label class="form-check-label" for="otherGender">Asian/pacific islander</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="race" id="otherGender"
                                value="option3" />
                                <label class="form-check-label" for="otherGender">unknown</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="race" id="otherGender"
                                value="option3" />
                                <label class="form-check-label" for="otherGender">Other</label>
                            </div>

                        </div>
                        <div class="col-md-2 mb-2">
                            <h6 class="mb-2 pb-1">Hispanic or Latino: </h6>

                            <div class="form-check form-check-inline">

                                <input class="form-check-input" type="checkbox" name="HorL" id="femaleGender"
                                value="option1" checked />
                                <label class="form-check-label" for="femaleGender">Yes</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="HorL" id="maleGender"
                                value="option2" />
                                <label class="form-check-label" for="maleGender">No</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="HorL" id="maleGender"
                                value="option2" />
                                <label class="form-check-label" for="maleGender">Unknown</label>
                            </div>

                        </div>
                        </div>

                        <div class="row">

                            <div class="col">
                                <p class="mb-2 pb-1"><b>Facility: (if hospitalized)</b></p>
                                <div class="row">
                                    <div class="form-group row">
                                        <label for="f_name" class="col-sm-2 col-form-label">Name</label>
                                        <div class="col-sm-6">
                                          <input type="text" name="f_name" class="form-control" id="f_name">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="facility_city" class="col-sm-2 col-form-label">City</label>
                                        <div class="col-sm-6">
                                          <input type="text" name="facility_city" class="form-control" id="facility_city">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="facility_county" class="col-sm-2 col-form-label">County</label>
                                        <div class="col-sm-6">
                                          <input type="text" name="facility_county" class="form-control" id="facility_county">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-4 pb-2">

                                            <div class="form-group row">
                                                <label for="facility_state" class="col-sm-4 col-form-label">State</label>
                                                <div class="col-sm-6">
                                                  <input type="text" name="facility_state" class="form-control" id="facility_state">
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-md-6 mb-4 pb-2">

                                            <div class="form-group row">
                                                <label for="facility_phone" class="col-sm-4 col-form-label">Phone Number</label>
                                                <div class="col-sm-6">
                                                  <input type="text" name="facility_phone" class="form-control" id="facility_phone">
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>

                            </div>
                            <div class="col">
                                <p class="mb-2 pb-1"><b>Present Address:</b></p>

                                    <div class="row">
                                        <div class="form-group row">
                                            <label for="facility_name" class="col-sm-2 col-form-label">Fiacility Name(if applicable)</label>
                                            <div class="col-sm-6">
                                              <input type="text" name="facility_name" class="form-control" id="facility_name">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="street" class="col-sm-2 col-form-label">Street</label>
                                            <div class="col-sm-6">
                                              <input type="text" name="street" class="form-control" id="street">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="city" class="col-sm-2 col-form-label">City</label>
                                            <div class="col-sm-6">
                                              <input type="text" name="city" class="form-control" id="city">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 mb-4 pb-2">
    
                                                <div class="form-group row">
                                                    <label for="county" class="col-sm-4 col-form-label">County</label>
                                                    <div class="col-sm-6">
                                                      <input type="text" name="county" class="form-control" id="county">
                                                    </div>
                                                </div>
    
                                            </div>
                                            <div class="col-md-6 mb-4 pb-2">
    
                                                <div class="form-group row">
                                                    <label for="state" class="col-sm-4 col-form-label">State</label>
                                                    <div class="col-sm-6">
                                                      <input type="text" name="state" class="form-control" id="state">
                                                    </div>
                                                </div>
    
                                            </div>
                                        </div>

                                    </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="medical_record" class="col-sm-2 col-form-label"><b>Medical Record#:</b></label>
                            <div class="col-sm-4">
                              <input type="text" name="medical_record" class="form-control" id="medical_record">
                            </div>
                        </div>

                        <div class="mt-4 pt-2">
                            <input class="btn btn-primary btn-lg" type="submit" value="Submit" />
                        </div>

                        </form>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </section>
    </body>
    <script type="text/javascript" src="{{ mix ('js/app.js')}}"></script>
</html>
