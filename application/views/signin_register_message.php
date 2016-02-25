<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<script type="text/javascript">
      $(document).ready(function(){
        
        $('#register_form').submit(function(){
          var form = $(this);

          $.post(form.attr('action'), form.serialize(), function(data){
            if(data.status){
              $('#regmsg_box').html('<p class="alert alert-success">'+ data.success_message +'</p>').removeClass('alert alert-error')
            }
            else{
              $('#regmsg_box').addClass('alert alert-error').html(data.error_message)
            }
          }, 'json');
          return false;
        });
        $('#signin_form').submit(function(){
          var form = $(this);

          $.post(form.attr('action'), form.serialize(), function(data){
            if(data.status){
              window.location = data.redirect_url
            }
            else{
              $('#signinmsg_box').addClass('alert alert-error').html(data.error_message)
            }
          }, 'json');

          return false;
        });
      });
    </script>

<div class="container container-main">
   <div class="row">
      <div class="col-md-7">
        <div class="signin-panel">
          <div id="regmsg_box"></div>
          <h3 class="category_header">Create a KMK Tees Account!</h3>
           <form id="register_form" action="/users/user_registration" method="post" >
            <div class="form-group register-names col-md-6">
                <label for="registerFirstname">First Name</label>
                <input type="text" class="form-control" id="registerFirstname" name="first_name"placeholder="Firstname" required>
              </div>
              <div class="form-group register-names col-md-6">
                <label for="registerLastname">Last Name</label>
                <input type="text" class="form-control" id="registerLastname" name="last_name" placeholder="Lastname" required>
              </div>
            <div class="form-group col-md-12">
              <label for="registerEmail">Email address</label>
              <input type="email" class="form-control" id="registerEmail" name="email" placeholder="Email" required>
            </div>
            <div class="form-group col-md-12">
              <label for="registerPassword">Password</label>
              <input type="password" class="form-control" id="registerPassword" name="password" placeholder="Password" required>
            </div>
            <div class="form-group col-md-12">
              <label for="confirmPassword">Confirm Password</label>
              <input type="password" class="form-control" id="confirmPassword" name="confirmpw" placeholder="Confirm Password" required>
            </div>
            <div class="clearfix col-md-12">
              <button type="submit" class="btn btn-default btn-lg pull-right">Register</button>
            </div>
          </form>
        </div>
      </div>
      <div class="col-md-5">
        <div class="signin-panel-grey">
        <h3 class="category_header">Sign In</h3>
        
        <form id="signin_form" action="/users/user_login" method="post">
          <div class="form-group">
            <label for="signinEmail">Email address</label>
            <input type="email" class="form-control" id="signinEmail" name="email" placeholder="Email" required>
          </div>
          <div class="form-group">
            <label for="signinPassword">Password</label>
            <input type="password" class="form-control" id="signinPassword" name="password" placeholder="Password" required>
          </div>
          <div class="clearfix">
            <button type="submit" class="btn btn-default btn-lg pull-right">Log In >></button>
          </div>
        </form>
        <div id="signinmsg_box"></div>
      </div>
      </div>
    </div>
  </div>

