@extends('layouts.app')

@section('content')
    <div class="bg-dim">
        <div class="container">
            <form class="login-form register" action="{{url('do/register')}}" method="post">
                @csrf
                <h3 class="text-center">Register now</h3>

                @if(session('status'))
                <div class="alert alert-danger" role="alert">
                    {{session('status')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif

                <div class="seperator">

                <div class="form-group">
                    <label for="name">What is your name?</label>
                    <input class="form-control" type="text" id="name" name="name" required>
                </div>

                <div class="form-group">
                    <label for="email">What is your e-mail address?</label>
                    <input class="form-control" type="email" id="email" name="email" required>
                </div>

                    <div class="form-group">
                        <label for="password">Set a password</label>
                        <input class="form-control" type="password" id="password" name="password" required>
                    </div>

                    <div class="form-group">
                        <label for="confpassword">Re-enter password</label>
                        <input class="form-control" type="password" id="confpassword" name="confpassword" required>
                    </div>

                <div class="form-group">
                    <label for="age">What is age?</label>
                    <input class="form-control" type="number" id="age" name="age" required>
                </div>

                <div class="form-group">
                    <p>What is your gender?</p>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="male">
                            <input type="radio" class="form-check-input" id="male" name="gender" value="male">Male
                        </label>
                    </div>

                    <div class="form-check-inline">
                        <label class="form-check-label" for="female">
                            <input type="radio" class="form-check-input" id="female" name="gender" value="female">Female
                        </label>
                    </div>
                </div>

                    <div class="form-group">
                        <label for="education">What is your education level?</label>
                        <select class="custom-select" required name="education" id="education">
                            <option selected>Choose an option</option>
                            <option value="below-primary">Below Primary School</option>
                            <option value="primary">Primary School</option>
                            <option value="middle">Middle School</option>
                            <option value="high">High School</option>
                            <option value="college">College or equivalent</option>
                            <option value="bachelor">Bachelor or degree equivalent</option>
                            <option value="master">Master or post graduate equivalent</option>
                            <option value="doctorate">Doctorate or equivalent</option>
                        </select>
                    </div>

                <div class="form-group">
                    <label for="income">What is your family's current annual household income?</label>
                    <input class="form-control" type="number" id="income" name="income" required>
                    <small class="form-text text-muted">*Please write the income amount in your local currency</small>
                </div>

                <div class="form-group">
                    <label for="city">Which city do you live?</label>
                    <input class="form-control" type="text" id="city" name="city" required>
                </div>

                <div class="form-group">
                    <label for="province">Which province are you from?</label>
                    <input class="form-control" type="text" id="province" name="province" required>
                </div>

                <div class="form-group">
                    <label for="country">Which country are from?</label>
                    <select class="custom-select" required name="country" id="country">
                        <option selected>Choose a country</option>
                        <option value="ZH">China</option>
                        <option value="HK">Hong Kong</option>
                        <option value="IN">India</option>
                        <option value="INDO">Indonesia</option>
                        <option value="JP">Japan</option>
                        <option value="MY">Malaysia</option>
                        <option value="SG">Singapore</option>
                        <option value="ROK">South Korea</option>
                        <option value="TW">Taiwan</option>
                        <option value="TH">Thailand</option>
                        <option value="VN">Vietnam</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="marital">What is your marital status?</label>
                    <select class="custom-select" name="marital" id="marital" required>
                        <option value="single" selected>Single</option>
                        <option value="married">Married</option>
                        <option value="divorced">Divorced</option>
                    </select>
                </div>

                <div class="form-group">
                    <p>Are you employed?</p>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="yes">
                            <input type="radio" class="form-check-input" id="yes" name="employed" value="yes">Yes
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="no">
                            <input type="radio" class="form-check-input" id="no" name="employed" value="no">No
                        </label>
                    </div>
                </div>

                    <div class="form-group unemployed-definition">
                        <label for="notemp">Are you a</label>
                        <select class="custom-select" name="notemp" id="notemp">
                            <option selected>Choose an option</option>
                            <option value="part-time">Part-time Employee</option>
                            <option value="student">Student</option>
                            <option value="housewife">Housewife</option>
                            <option value="freelancer">Freelancer</option>
                        </select>
                    </div>

                    <div class="employed-definition">
                <div class="form-group">
                    <label for="industry">Which industry your company belongs to?</label>
                    <select class="custom-select" name="industry" id="industry">
                        <option selected>Choose an industry</option>
                        <option value="accounting">Accounting</option>
                        <option value="adv-pr">Advertising/Public Relations</option>
                        <option value="banking">Banking</option>
                        <option value="computers">Computers</option>
                        <option value="construction">Construction</option>
                        <option value="ed-aca">Education/Academia</option>
                        <option value="hr">Human Resource</option>
                        <option value="finserv">Financial Services</option>
                        <option value="gov-mil">Government/Military</option>
                        <option value="healthcare">Health Care</option>
                        <option value="law">Law</option>
                        <option value="marketing">Marketing</option>
                        <option value="media-journo">Media/Journalism</option>
                        <option value="profserv">Professional Services</option>
                        <option value="realest">Real Estates</option>
                        <option value="retail">Retail Sales</option>
                        <option value="science">Science</option>
                        <option value="telecom">Telecommunications</option>
                        <option value="agri">Agriculture</option>
                        <option value="transport">Transportation</option>
                        <option value="travel-tourism">Travel/Tourism</option>
                        <option value="others">Others</option>
                        <option value="biotech">Biotech</option>
                        <option value="comm">Communications</option>
                        <option value="consultancy">Consultancy</option>
                        <option value="embassy">Embassy</option>
                        <option value="exim">Export/Import</option>
                        <option value="food">Food</option>
                        <option value="hotel-resto">Hotels/Restaurant</option>
                        <option value="insurance">Insurance</option>
                        <option value="mr">Market Research</option>
                        <option value="pub">Publishing</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="workers">How many workers are there in your company?</label>
                    <input class="form-control" type="number" id="workers" name="workers">
                </div>

                <div class="form-group">
                    <label for="comp-nature">What is the nature of your company?</label>
                    <input class="form-control" type="" id="comp-nature" name="comp-nature">
                </div>
                    </div>

                    <div class="form-group">
                        <label for="e-pay">Which online payment methods do you use?</label>
                        <input class="form-control" type="text" id="e-pay" name="e-pay" required>
                    </div>

                <div class="form-group">
                    <p>Do you hold a credit card?</p>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="ccYes">
                            <input type="radio" class="form-check-input" id="ccYes" name="credit-card" value="yes">Yes
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="ccNo">
                            <input type="radio" class="form-check-input" id="ccNo" name="credit-card" value="no">No
                        </label>
                    </div>
                </div>

                <div class="form-group">
                    <p>Do you have children under the age 18 in your home?</p>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="childYes">
                            <input type="radio" class="form-check-input" id="childYes" name="child" value="yes">Yes
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="childNo">
                            <input type="radio" class="form-check-input" id="childNo" name="child" value="no">No
                        </label>
                    </div>
                </div>

                    <div class="form-group">
                        <p>Do you have a car?</p>
                        <div class="form-check-inline">
                            <label class="form-check-label" for="carYes">
                                <input type="radio" class="form-check-input" id="carYes" name="car" value="yes">Yes
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label" for="carNo">
                                <input type="radio" class="form-check-input" id="carNo" name="car" value="no">No
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <p>Have you travelled in the past 12 months?</p>
                        <div class="form-check-inline">
                            <label class="form-check-label" for="travelYes">
                                <input type="radio" class="form-check-input" id="travelYes" name="travel" value="yes">Yes
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label" for="travelNo">
                                <input type="radio" class="form-check-input" id="travelNo" name="travel" value="no">No
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <p>Do you run or jog atleast twice a week?</p>
                        <div class="form-check-inline">
                            <label class="form-check-label" for="runYes">
                                <input type="radio" class="form-check-input" id="runYes" name="run" value="yes">Yes
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label" for="runNo">
                                <input type="radio" class="form-check-input" id="runNo" name="run" value="no">No
                            </label>
                        </div>
                    </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-success" value="Register">
                </div>
                    <p class="">Already registered? <a href="{{url('/login')}}">Login now</a></p>
                </div>
            </form>
        </div>
    </div>
    @endsection