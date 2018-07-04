@extends('layouts.app')

@section('content')
<div class="bc-container mb-4">
    <div class="container">
        <h4 class="">Dashboard</h4>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-3">
            <div class="profile">
                <div class="card">
                    <div class="card-img-top-wrapper">
                        <img class="card-img-top" src="../assets/img/{{$prof_pic}}" alt="{{$user->name}}" title="{{$user->name}}">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{$user->name}}</h5>
                        <p class="card-text">Registered on {{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $user->created_at)->toFormattedDateString()}}</p>
                        <p class="card-text">{{$user->city. ' - ' .Iapac\Panel\Custom\CustomHelpers::isoToCountry($user->country)}}</p>
                        {{--<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>--}}
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><a href="">Edit Profile</a></li>
                        <li class="list-group-item"><a href="">Change Password</a></li>
                    </ul>
                    <div class="card-body">
                        <p>For any assistance/queries, email us:</p>
                        <a href="mailto:panel@i-apaconline.com">panel@i-apaconline.com</a>
                    </div>
                </div>

                <div class="card text-white bg-primary mt-3 mb-3" style="max-width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Redeem rewards</h5>
                        <form action="{{url('/home')}}" method="get">
                            <div class="input-group">
                                <input class="form-control w-100" type="text" name="redeem" placeholder="Points to redeem" required>
                                <small class="form-text text-light">Available points to withdraw: <strong>0</strong></small>
                            </div>
                            <div class="input-group mt-2">
                                <input type="submit" value="Redeem" class="btn btn-success">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-9">
            <div class="surveys-list">
                <div class="card">
                    <h5 class="card-header">Surveys for you</h5>
                    <div class="card-body">
                        <table class="table table-striped table-borderless">
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Description</th>
                                <th scope="col">LOI</th>
                                <th scope="col">Reward</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                            <tr class="disabled">
                                <td>BSMFA16</td>
                                <td>BSM Summer Tracking Project</td>
                                <td>20 Mins</td>
                                <td>400 Coins</td>
                                <td>Completed</td>
                                <td>Start Survey</td>
                            </tr>
                            <tr class="disabled">
                                <td>BSMHO16</td>
                                <td>BSM Summer Tracking Project</td>
                                <td>20 Mins</td>
                                <td>400 Coins</td>
                                <td>Completed</td>
                                <td>Start Survey</td>
                            </tr>
                            <tr class="disabled">
                                <td>BSMSP17</td>
                                <td>BSM Summer Tracking Project</td>
                                <td>20 Mins</td>
                                <td>400 Coins</td>
                                <td>Completed</td>
                                <td>Start Survey</td>
                            </tr>
                            <tr class="disabled">
                                <td>BSMSU17</td>
                                <td>BSM Summer Tracking Project</td>
                                <td>20 Mins</td>
                                <td>400 Coins</td>
                                <td>Completed</td>
                                <td>Start Survey</td>
                            </tr>
                            <tr class="disabled">
                                <td>BSMFA17</td>
                                <td>BSM Summer Tracking Project</td>
                                <td>20 Mins</td>
                                <td>400 Coins</td>
                                <td>Completed</td>
                                <td>Start Survey</td>
                            </tr>
                            <tr class="disabled">
                                <td>BSMHO17</td>
                                <td>BSM Summer Tracking Project</td>
                                <td>20 Mins</td>
                                <td>400 Coins</td>
                                <td>Completed</td>
                                <td>Start Survey</td>
                            </tr>
                            <tr class="disabled">
                                <td>BSMSP18</td>
                                <td>BSM Summer Tracking Project</td>
                                <td>20 Mins</td>
                                <td>400 Coins</td>
                                <td>Completed</td>
                                <td>Start Survey</td>
                            </tr>
                            <tr>
                                <td>BSMSU18</td>
                                <td>BSM Summer Tracking Project</td>
                                <td>20 Mins</td>
                                <td>400 Coins</td>
                                <td>Paused</td>
                                <td><a href="">Start Survey</a></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

            <div class="basic-info mt-4">
                <div class="card">
                    <h5 class="card-header">Basic Information</h5>
                    <div class="card-body">
                        <table class="table table-borderless">
                            <tr>
                                <td scope="row" class="w-50">Name</td>
                                <td class="text-secondary">{{$user->name}}</td>
                            </tr>
                            <tr>
                                <td scope="row" class="w-50">E-mail Address</td>
                                <td class="text-secondary">{{$user->email}}</td>
                            </tr>
                            <tr>
                                <td scope="row" class="w-50">Password</td>
                                <td class="text-secondary"><a href="">Change password</a></td>
                            </tr>
                            <tr>
                                <td scope="row" class="w-50">Country</td>
                                <td class="text-secondary">{{\Iapac\Panel\Custom\CustomHelpers::isoToCountry($user->country)}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

            <div class="basic-info mt-4 mb-5">
                <div class="card">
                    <h5 class="card-header">Demographic Information</h5>
                    <div class="card-body">
                        <table class="table table-borderless">
                            <tr>
                                <td scope="row" class="w-50">Province</td>
                                <td class="text-secondary">{{ucfirst($user->province)}}</td>
                            </tr>
                            <tr>
                                <td scope="row" class="w-50">City</td>
                                <td class="text-secondary">{{ucfirst($user->city)}}</td>
                            </tr>
                            <tr>
                                <td scope="row" class="w-50">Age</td>
                                <td class="text-secondary">{{$user->age}}</td>
                            </tr>
                            <tr>
                                <td scope="row" class="w-50">Gender</td>
                                <td class="text-secondary">{{ucfirst($user->gender)}}</td>
                            </tr>
                            <tr>
                                <td scope="row" class="w-50">Education level</td>
                                <td class="text-secondary">{{\Iapac\Panel\Custom\CustomHelpers::education($user->education)}}</td>
                            </tr>
                            <tr>
                                <td scope="row" class="w-50">Marital Status</td>
                                <td class="text-secondary">{{ucfirst($user->marital)}}</td>
                            </tr>
                            <tr>
                                <td scope="row" class="w-50">Is employed</td>
                                <td class="text-secondary">{{$user->employed ? 'Yes' : Iapac\Panel\Custom\CustomHelpers::employment($user->notemp)}}</td>
                            </tr>
                            <tr>
                                <td scope="row" class="w-50">Average Annual Income</td>
                                <td class="text-secondary">{{$user->income}}</td>
                            </tr>
                            @if($user->employed)
                            <tr>
                                <td scope="row" class="w-50">Industry</td>
                                <td class="text-secondary">{{\Iapac\Panel\Custom\CustomHelpers::industry($user->industry)}}</td>
                            </tr>
                            <tr>
                                <td scope="row" class="w-50">Number of employees</td>
                                <td class="text-secondary">{{$user->workers}}</td>
                            </tr>
                            <tr>
                                <td scope="row" class="w-50">Nature of company</td>
                                <td class="text-secondary">{{$user->comp_nature}}</td>
                            </tr>
                            @endif
                            <tr>
                                <td scope="row" class="w-50">Online payment method used</td>
                                <td class="text-secondary">{{$user->e_pay}}</td>
                            </tr>
                            <tr>
                                <td scope="row" class="w-50">Has Credit Card</td>
                                <td class="text-secondary">{{$user->credit_card ? 'Yes' : 'No'}}</td>
                            </tr>
                            <tr>
                                <td scope="row" class="w-50">Has child below 18 years</td>
                                <td class="text-secondary">{{$user->child ? 'Yes' : 'No'}}</td>
                            </tr>
                            <tr>
                                <td scope="row" class="w-50">Has a car</td>
                                <td class="text-secondary">{{$user->car ? 'Yes' : 'No'}}</td>
                            </tr>
                            <tr>
                                <td scope="row" class="w-50">Has travelled in the last 12 months</td>
                                <td class="text-secondary">{{$user->travel ? 'Yes' : 'No'}}</td>
                            </tr>
                            <tr>
                                <td scope="row" class="w-50">Does running/jogging atleast twice a week</td>
                                <td class="text-secondary">{{$user->run ? 'Yes' : 'No'}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
