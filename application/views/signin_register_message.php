<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<div class="container container-main">
   <div class="row">
      <div class="col-md-7">
        <div class="signin-panel">
        <h3 class="category_header">Create a KMK Tees Account!</h3>
         <form>
          <div class="form-group register-names col-md-6">
              <label for="registerFirstname">First Name</label>
              <input type="text" class="form-control" id="registerFirstname" placeholder="Firstname">
            </div>
            <div class="form-group register-names col-md-6">
              <label for="registerLastname">Last Name</label>
              <input type="text" class="form-control" id="registerLastname" placeholder="Lastname">
            </div>
          <div class="form-group col-md-12">
            <label for="registerEmail">Email address</label>
            <input type="email" class="form-control" id="registerEmail" placeholder="Email" required>
          </div>
          <div class="form-group col-md-12">
            <label for="registerPassword">Password</label>
            <input type="password" class="form-control" id="registerPassword" placeholder="Password" required>
          </div>
          <div class="form-group col-md-12">
            <label for="confirmPassword">Confirm Password</label>
            <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm Password" required>
          </div>
          <button type="submit" class="btn btn-default btn-lg center-block">Log In</button>
        </form>
      </div>
      </div>
      <div class="col-md-5">
        <div class="signin-panel-grey">
        <h3 class="category_header">Sign In</h3>

        <form>
          <div class="form-group">
            <label for="signinEmail">Email address</label>
            <input type="email" class="form-control" id="signinEmail" placeholder="Email" required>
          </div>
          <div class="form-group">
            <label for="signinPassword">Password</label>
            <input type="password" class="form-control" id="signinPassword" placeholder="Password" required>
          </div>
          <button type="submit" class="btn btn-default btn-lg">Log In</button>
        </form>

      </div>
      </div>
    </div>
  </div>

