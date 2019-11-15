@extends('layouts.main')

@section('title')
   Registration
@stop

@section('content')

    <div class="dlab-bnr-inr dlab-bnr-inr overlay-primary bg-pt" style="background-image:url({{ asset('images/banner/bnr1.jpg') }});">
        <div class="container">
            <div class="dlab-bnr-inr-entry">
                <h1 class="text-white" style="font-family: 'Courgette', cursive;">Registration</h1>
            </div>
        </div>
    </div>

    <div class="section-full content-inner bg-white contact-style-1">
        <div class="container">

            <div class="row">

                <!-- right part start -->
                <div class="col-lg-4 col-md-4 d-flex">
                    <div class="p-a30 border m-b30 contact-area border-1 align-self-stretch ">
                        <h4 class="m-b10" style="font-family: 'Courgette', cursive;">Steps to become a kidstar model</h4>
                        <h6>Account Details</h6>
                        <p>Kid star models<br>
                            GTB<br>
                            Number 0264844777 (NAIRA)<br><br>

                            Kid star models<br>
                            GTB<br>
                            0471161692 (Dollar)</p><br><br>

                        <p><strong>Step 1:</strong><br> Pay a sum of 30,000 Naira to our Nigerian Account, or $35 to our Dollar account. Above are our account details</p>
                        <p><strong>Step 2:</strong><br> Fill in your details accurately and upload a scanned copy of your proof of payment, this will make our selection more efficient.</p>
                        <p><strong>Step 3:</strong><br> Once payment has been approved, you would be sent a confirmation email.</p>
                        <p>For more clarity please call our contacts at the bottom of the page or send us an email at info@kidstarmodels.com</p><br><br>

                        <div class="m-t20">
                            <ul class="dlab-social-icon dlab-social-icon-lg">
                                <li><a href="https://web.facebook.com/kidstarmodels/?_rdc=1&_rdr" class="fa fa-facebook bg-primary"></a></li>
                                <li><a href="https://www.instagram.com/kid_starmodels/" class="fa fa-instagram bg-primary"></a></li>
                            </ul>
                        </div>

                    </div>
                </div>
                <!-- right part END -->

                <!-- Left part start -->
                <div class="col-lg-8 col-md-8 m-b30">
                    <div class="p-a30 bg-gray clearfix">
                        <h4 style="font-family: 'Courgette', cursive;">Sign up</h4>

                        @include('includes.alerts')

                        <form method="post" action="{{ route('applications.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Surname</label>
                                        <div class="input-group">
                                            <input name="surname" type="text" required="" class="form-control" placeholder="Surname">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label>Other Names</label>
                                        <div class="input-group">
                                            <input name="othernames" type="text" required="" class="form-control" placeholder="Other Names">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>Age</label>
                                        <div class="input-group">
                                            <input name="age" type="number" required="" class="form-control" placeholder="Age">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Health Issues?</label>
                                        <div class="input-group">
                                            <select name="health_issues" class="bootstrap-select" required>
                                                <option value="0">No</option>
                                                <option value="1">Yes</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Health Details (If yes ?)</label>
                                        <div class="input-group">
                                            <input name="health_details" type="text" class="form-control" placeholder="Health Details">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Nationality</label>
                                        <div class="input-group">
                                            <input name="nationality" type="text" required="" class="form-control" placeholder="Nationality">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>State</label>
                                        <div class="input-group">
                                            <input name="state" type="text" required="" class="form-control" placeholder="State">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>City</label>
                                        <div class="input-group">
                                            <input name="city" type="text" required="" class="form-control" placeholder="City">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Address</label>
                                        <div class="input-group">
                                            <input name="address" type="text" class="form-control" placeholder="Address">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Vital State</label>
                                        <div class="input-group">
                                            <input name="vital_state" type="text" class="form-control" placeholder="Vital State">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>School Name</label>
                                        <div class="input-group">
                                            <input name="school_name" type="text" required="" class="form-control" placeholder="School Name">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>School Class</label>
                                        <div class="input-group">
                                            <input name="school_class" type="text" required="" class="form-control" placeholder="School Class">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Height</label>
                                        <div class="input-group">
                                            <input name="height" type="text" required="" class="form-control" placeholder="Height">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Bust</label>
                                        <div class="input-group">
                                            <input name="bust" type="text" class="form-control" placeholder="Bust">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Waist</label>
                                        <div class="input-group">
                                            <input name="waist" type="text" class="form-control" placeholder="Waist">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Hips</label>
                                        <div class="input-group">
                                            <input name="hips" type="text" required="" class="form-control" placeholder="Hips">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>1. In one sentence, what does the word beauty mean to you?</label>
                                        <div class="input-group">
                                            <input name="question1" type="text" required="" class="form-control" placeholder="In one sentence, what does the word beauty mean to you?">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>2. In one sentence, what is the motivation behind becoming a model?</label>
                                        <div class="input-group">
                                            <input name="question2" type="text" required="" class="form-control" placeholder="In one sentence, what is the motivation behind becoming a model?">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>3. In one sentence, what do you think makes a person attractive?</label>
                                        <div class="input-group">
                                            <input name="question3" type="text" required="" class="form-control" placeholder="In one sentence, what do you think makes a person attractive?">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>4. Have you been in any other agency before? If yes, Name the year</label>
                                        <div class="input-group">
                                            <input name="question4" type="text" required="" class="form-control" placeholder="Have you been in any other agency before? If yes, Name the year">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>5. Why did you choose to be part of Kid Star Models Modeling Agency</label>
                                        <div class="input-group">
                                            <input name="question5" type="text" required="" class="form-control" placeholder="Why did you choose to be part of Kid Star Models Modeling Agency">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Parent Surname</label>
                                        <div class="input-group">
                                            <input name="parent_surname" type="text" required="" class="form-control" placeholder="Parent Surname">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Parent Other Names</label>
                                        <div class="input-group">
                                            <input name="parent_othernames" type="text" required="" class="form-control" placeholder="Parent Other Names">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Parent Mobile</label>
                                        <div class="input-group">
                                            <input name="parent_mobile" type="tel" required="" class="form-control" placeholder="Parent Mobile">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Parent Email</label>
                                        <div class="input-group">
                                            <input name="parent_email" type="email" class="form-control" required="" placeholder="Parent Email">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Parent Address</label>
                                        <div class="input-group">
                                            <input name="parent_address" type="text" required="" class="form-control" placeholder="Parent Address">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Payment Details ( E.g. Account Number, Account Name and Bank )</label>
                                        <div class="input-group">
                                            <input name="payment_details" type="text" required="" class="form-control" placeholder="Payment Details">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Proof of Payment ( E.g. Scanned copy of teller or Screenshot of online transaction )</label>
                                        <div class="input-group">
                                            <input name="image_id" type="file" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <button name="submit" type="submit" value="Submit" class="site-button"> <span>Submit</span> </button>
                                </div>

                            </div>
                        </form>

                    </div>
                </div>
                <!-- Left part END -->
            </div>


        </div>
    </div>
@stop
