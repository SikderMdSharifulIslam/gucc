<?php
session_start();
require 'header.php';

?>

<div class="hero min-h-screen bg-base-200">
  <div class="hero-content flex-col lg:flex-row-reverse">
    <div class="text-center lg:text-left">
      <h1 class="text-4xl font-bold">Welcome to GUCC!</h1>
      <p class="py-6">Please enter your credentials to create an account.
        Already have an account? <a class="link link-info" href="sign_in.php">Sign In</a></p>
    </div>
    <div class="card shrink-0 w-full max-w-md shadow-2xl bg-base-100">
      <form class="card-body" method="POST" action="signUp_post.php">
        <div class="form-control">
          <label class="label">
            <span class="label-text">Student ID</span>
          </label>
          <input name="student_id" type="text" placeholder="student id" class="input input-bordered" value="<?= (isset($_SESSION['old_student_id'])) ? $_SESSION['old_student_id'] : '' ?>" />
          <?php if (isset($_SESSION['student_id_error'])) :
          ?>
            <p class="text-red-600"><?= $_SESSION['student_id_error']; ?></p>
          <?php
            unset($_SESSION['student_id_error']);
            elseif (isset($_SESSION['duplicate_id_error'])) : ?>
              <p class="text-red-600"><?= $_SESSION['duplicate_id_error']; ?></p>
            <?php
            unset($_SESSION['duplicate_id_error']);
          endif; 
          unset($_SESSION['old_student_id']);
            ?>
        </div>
        <div class="form-control">
          <label class="label">
            <span class="label-text">Full Name</span>
          </label>
          <input name="full_name" type="text" placeholder="full name" class="input input-bordered" value="<?= (isset($_SESSION['old_name'])) ? $_SESSION['old_name'] : '' ?>" />
          <?php if (isset($_SESSION['name_error'])) :
          ?>
            <p class="text-red-600"><?= $_SESSION['name_error']; ?></p>
          <?php
            unset($_SESSION['name_error']);
          endif; 
          unset($_SESSION['old_name']);
          ?>
        </div>
        <div class="form-control">
          <label class="label">
            <span class="label-text">Email</span>
          </label>
          <input name="email_address" type="email" placeholder="email" class="input input-bordered" value="<?= (isset($_SESSION['old_email'])) ? $_SESSION['old_email'] : '' ?>" />
          <?php if (isset($_SESSION['email_error'])) :
          ?>
            <p class="text-red-600"><?= $_SESSION['email_error']; ?></p>
            
          <?php 
          unset($_SESSION['email_error']);
          elseif (isset($_SESSION['duplicate_email_error'])) : ?>
            <p class="text-red-600"><?= $_SESSION['duplicate_email_error']; ?></p>
          <?php
          unset($_SESSION['duplicate_email_error']);
        endif; 
        unset($_SESSION['old_email']);
          ?>
        </div>
        <div class="form-control">
          <label class="label">
            <span class="label-text">Contact</span>
          </label>
          <input name="contact_number" type="text" placeholder="contact" class="input input-bordered" value="<?= (isset($_SESSION['old_contact_number'])) ? $_SESSION['old_contact_number'] : '' ?>" />

          <?php if (isset($_SESSION['contact_number_error'])) :
          ?>
            <p class="text-red-600"><?= $_SESSION['contact_number_error']; ?></p>
            
          <?php 
          unset($_SESSION['contact_number_error']);
          elseif (isset($_SESSION['duplicate_contact_error'])) : ?>
            <p class="text-red-600"><?= $_SESSION['duplicate_contact_error']; ?></p>
          <?php
          unset($_SESSION['duplicate_contact_error']);
        endif; 
        unset($_SESSION['old_contact_number']);
        ?>
        </div>
        <div class="form-control">
          <label class="label">
            <span class="label-text">Password</span>
          </label>
          <input name="password" type="password" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;" class="input input-bordered" value="<?= (isset($_SESSION['old_password'])) ? $_SESSION['old_password'] : '' ?>" />
          <?php if (isset($_SESSION['password_error'])) :
          ?>
            <p class="text-red-600"><?= $_SESSION['password_error']; ?></p>
            
          <?php 
          unset($_SESSION['password_error']);
        endif; 
        unset($_SESSION['old_password']);
        ?>
        </div>
        <div class="form-control mt-6">
          <button class="btn btn-primary" type="submit">Sign Up</button>
        </div>
      </form>
    </div>
  </div>
</div>

<?php require 'footer.php' ?>