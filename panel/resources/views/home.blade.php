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
        </div>
    </div>

    <div class="row">
        <div class="offset-3 col-9">
            <div class="basic-info mt-1">
                <div class="card">
                    <h5 class="card-header">Basic Information</h5>
                    <div class="card-body">
                        <table class="table table-borderless">
                            <tr>
                                <td scope="row">Name</td>
                                <td>{{$user->name}}</td>
                            </tr>
                            <tr>
                                <td scope="row">E-mail Address</td>
                                <td>{{$user->email}}</td>
                            </tr>
                            <tr>
                                <td scope="row">Password</td>
                                <td><a href="">Change password</a></td>
                            </tr>
                            <tr>
                                <td scope="row">Country</td>
                                <td>{{\Iapac\Panel\Custom\CustomHelpers::isoToCountry($user->country)}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="offset-3 col-9">
            <div class="basic-info mt-4">
                <div class="card">
                    <h5 class="card-header">Demographic Information</h5>
                    <div class="card-body">
                        <table class="table table-borderless">
                            <tr>
                                <td scope="row">Province</td>
                                <td>{{ucfirst($user->province)}}</td>
                            </tr>
                            <tr>
                                <td scope="row">City</td>
                                <td>{{ucfirst($user->city)}}</td>
                            </tr>
                            <tr>
                                <td scope="row">Age</td>
                                <td>{{$user->age}}</td>
                            </tr>
                            <tr>
                                <td scope="row">Gender</td>
                                <td>{{ucfirst($user->gender)}}</td>
                            </tr>
                            <tr>
                                <td scope="row">Marital Status</td>
                                <td>{{ucfirst($user->marital)}}</td>
                            </tr>
                            <tr>
                                <td scope="row">Employed</td>
                                <td>{{$user->employed ? 'Yes' : 'No'}}</td>
                            </tr>
                            <tr>
                                <td scope="row">Average Annual Income</td>
                                <td>{{$user->income}}</td>
                            </tr>
                            <tr>
                                <td scope="row">Industry</td>
                                <td>{{\Iapac\Panel\Custom\CustomHelpers::industry($user->industry)}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
