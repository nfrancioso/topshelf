@extends('frontend.layouts.app')

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-4">
                <div class="card card-user">
                    <div class="image">
                        <img src="user/img/background.jpg" alt="..."/>
                    </div>
                    <div class="content">
                        <div class="author">
                          <img class="avatar border-white" src="{{ $logged_in_user->picture }}" alt="..."/>
                          <h4 class="title">{{ $logged_in_user->name }}<br />
                             <a><small>{{ $logged_in_user->email }}</small></a>
                          </h4>
                        </div>
                        <!-- <p class="description text-center">
                            "I like the way you work it <br>
                            No diggity <br>
                            I wanna bag it up"
                        </p> -->
                    </div>
                    <hr>
                    <div class="text-center">
                        <div class="row">
                            <div class="col-md-3 col-md-offset-1">
                                <h5>12<br /><small>Scans</small></h5>
                            </div>
                            <div class="col-md-4">
                                <h5>8<br /><small>Scans Left</small></h5>
                            </div>
                            <div class="col-md-3">
                                <h5>22<br /><small>Rewards</small></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="card">
                    <div class="header">
                        <h4 class="title">Team Members</h4>
                    </div>
                    <div class="content">
                        <ul class="list-unstyled team-members">
                                    <li>
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <div class="avatar">
                                                    <img src="user/img/faces/face-0.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                DJ Khaled
                                                <br />
                                                <span class="text-muted"><small>Offline</small></span>
                                            </div>

                                            <div class="col-xs-3 text-right">
                                                <btn class="btn btn-sm btn-success btn-icon"><i class="fa fa-envelope"></i></btn>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <div class="avatar">
                                                    <img src="user/img/faces/face-1.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                Creative Tim
                                                <br />
                                                <span class="text-success"><small>Available</small></span>
                                            </div>

                                            <div class="col-xs-3 text-right">
                                                <btn class="btn btn-sm btn-success btn-icon"><i class="fa fa-envelope"></i></btn>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <div class="avatar">
                                                    <img src="user/img/faces/face-3.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                Flume
                                                <br />
                                                <span class="text-danger"><small>Busy</small></span>
                                            </div>

                                            <div class="col-xs-3 text-right">
                                                <btn class="btn btn-sm btn-success btn-icon"><i class="fa fa-envelope"></i></btn>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                    </div>
                </div> -->
            </div>

            <div class="col-lg-9 col-md-8">

              <div class="card">
                                  <div class="card-header">
                                      <h4 class="card-title">Edit Profile</h4>
                                  </div>
                                  <div class="card-content">
                                      <div class="nav-tabs-navigation">
                                          <div class="nav-tabs-wrapper">
                                              <ul class="nav nav-tabs" data-tabs="tabs" id="tabs">
                                                  <li class="active"><a data-toggle="tab" href="#profile" aria-expanded="false">Profile</a></li>
                                                  <li class=""><a data-toggle="tab" href="#edit" aria-expanded="true">Update</a></li>
                                                  <li class=""><a data-toggle="tab" href="#avatar" aria-expanded="true">Avatar</a></li>
                                                  @if ($logged_in_user->canChangePassword())
                                                  <li class=""><a data-toggle="tab" href="#password" aria-expanded="false">Change Password</a></li>
                                                  @endif
                                              </ul>
                                          </div>
                                      </div>
                                      <div class="tab-content" id="my-tab-content">
                                          <div class="tab-pane active" id="profile">
                                            @include('frontend.user.account.tabs.profile')
                                          </div>
                                          <div class="tab-pane" id="edit">
                                            @include('frontend.user.account.tabs.edit')
                                          </div>
                                          <div class="tab-pane" id="avatar">
                                            @include('frontend.user.account.tabs.avatar')
                                          </div>
                                          <div class="tab-pane" id="password">
                                            @include('frontend.user.account.tabs.change-password')
                                          </div>
                                      </div>
                                  </div>
                              </div>

            </div>
        </div>
    </div>
</div>

@endsection
