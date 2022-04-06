@extends('layouts.header')

@section('content')

<div class="shell shell-wide section-92 section-lg-bottom-148 bg-img-01">
            <hr class="divider">
            <h1>---------- Mi cuenta ---------</h1>
            <div class="row">
  		<div class="col-sm-4"><h1>{{ Auth::user()->name }}</h1></div>
    </div>
    <div class="row">
  		<div class="col-sm-3"><!--left col-->


          <div class="text-center">
            <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar">
            <h6>Upload a different photo...</h6>
            <input type="file" class="text-center center-block file-upload">
          </div></hr><br>


          <div class="panel panel-default">
            <div class="panel-heading">Website <i class="fa fa-link fa-1x"></i></div>
            <div class="panel-body"><a href="http://bootnipets.com">bootnipets.com</a></div>
          </div>


          <ul class="list-group">
            <li class="list-group-item text-muted">Activity <i class="fa fa-dashboard fa-1x"></i></li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Shares</strong></span> 125</li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Likes</strong></span> 13</li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Posts</strong></span> 37</li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Followers</strong></span> 78</li>
          </ul>

          <div class="panel panel-default">
            <div class="panel-heading">Social Media</div>
            <div class="panel-body">
            	<i class="fa fa-facebook fa-2x"></i> <i class="fa fa-github fa-2x"></i> <i class="fa fa-twitter fa-2x"></i> <i class="fa fa-pinterest fa-2x"></i> <i class="fa fa-google-plus fa-2x"></i>
            </div>
          </div>

      </div><!--/col-3-->
    	<div class="col-sm-9">
          <div class="tab-content">
            <div class="tab-pane active" id="home">
                  <form class="form" action="##" method="post" id="registrationForm">
                      <div class="form-group">

                          <div class="col-xs-6">
                              <label for="first_name"><h4>First name</h4></label>
                              <input type="text" class="form-control" name="first_name" id="first_name" placeholder="first name" title="enter your first name if any.">
                          </div>
                      </div>
                      <div class="form-group">

                          <div class="col-xs-6">
                            <label for="last_name"><h4>Last name</h4></label>
                              <input type="text" class="form-control" name="last_name" id="last_name" placeholder="last name" title="enter your last name if any.">
                          </div>
                      </div>

                      <div class="form-group">

                          <div class="col-xs-6">
                              <label for="phone"><h4>Phone</h4></label>
                              <input type="text" class="form-control" name="phone" id="phone" placeholder="enter phone" title="enter your phone number if any.">
                          </div>
                      </div>

                      <div class="form-group">
                          <div class="col-xs-6">
                             <label for="mobile"><h4>Mobile</h4></label>
                              <input type="text" class="form-control" name="mobile" id="mobile" placeholder="enter mobile number" title="enter your mobile number if any.">
                          </div>
                      </div>
                      <div class="form-group">

                          <div class="col-xs-6">
                              <label for="email"><h4>Email</h4></label>
                              <input type="email" class="form-control" name="email" id="email" placeholder="you@email.com" title="enter your email.">
                          </div>
                      </div>
                      <div class="form-group">

                          <div class="col-xs-6">
                              <label for="email"><h4>Location</h4></label>
                              <input type="email" class="form-control" id="location" placeholder="somewhere" title="enter a location">
                          </div>
                      </div>
                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                              	<button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                               	<button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
                            </div>
                      </div>
              	</form>

              <hr>

             </div><!--/tab-pane-->

          </div><!--/tab-content-->

        </div><!--/col-9-->
    </div><!--/row-->
  </div>
            <!--
            <div class="range range-xs-center text-left offset-top-40 offset-lg-top-80">
              <div class="cell-sm-11 cell-md-10">
                <dl class="list-terms-variant-1">
                  <dt><span>Breed number</span></dt>
                  <dd>40</dd>
                </dl>
                <dl class="list-terms-variant-1">
                  <dt><span>Average lifespan</span></dt>
                  <dd>15 to 20 years</dd>
                </dl>
                <dl class="list-terms-variant-1">
                  <dt><span>Temperament</span></dt>
                  <dd>Friendly and affectionate, loyal and devoted, good with children and other pets.</dd>
                </dl>
                <dl class="list-terms-variant-1">
                  <dt><span>Weight</span></dt>
                  <dd>Males 6.8 to 8.1kg; females 4.5 to 5.4kg</dd>
                </dl>
                <dl class="list-terms-variant-1">
                  <dt><span>AVAILABILITY</span></dt>
                  <dd>Easy</dd>
                </dl>
                <dl class="list-terms-variant-1">
                  <dt><span>Colours</span></dt>
                  <dd>Available in almost every colour and coat pattern you can think of.</dd>
                </dl>
                <dl class="list-terms-variant-1">
                  <dt><span>Grooming</span></dt>
                  <dd>Once a week is adequate. A simple hand groom will often remove dead hair.</dd>
                </dl>
              </div>
            </div>
-->
          </div>

@endsection
