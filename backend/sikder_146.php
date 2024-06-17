<?php
session_start();
require 'header.php';
?>


<div class="hero min-h-screen bg-base-200">
    <div class="hero-content flex-col lg:flex-row-reverse">
        <div class="text-center lg:text-left">
            <h1 class="text-4xl font-bold">Admin SIGN_IN!</h1>
            <p class="py-6">Please sign-in to your account and continue to the dashboard.
                Don't have an account? <a class="link link-info" href="../index.php">Home</a></p>
        </div>
        <div class="card shrink-0 w-full max-w-sm shadow-2xl bg-base-100">
            <?php if (isset($_SESSION['signIn_error'])) : ?>
                <div class="alert alert-error mb-4 ">
                    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <?= $_SESSION['signIn_error']; ?>
                </div>
            <?php endif;
            unset($_SESSION['signIn_error']);
            ?>
            <form class="card-body" method="POST" action="sikder_146_post.php">
                <div class="form-control">
                    <label class="label">
                        <span class="label-text">Code</span>
                    </label>
                    <input name="code" type="text" placeholder="Enter the code" class="input input-bordered" />
                    
                    <?php if(isset($_SESSION['code_error'])):?>
                    <p class="text-red-600"><?= $_SESSION['code_error']; ?></p>
                    <?php endif; unset($_SESSION['code_error'])?>
            
                </div>
                <div class="form-control">
                    <label class="label">
                        <span class="label-text">Password</span>
                    </label>
                    <input name="password" type="password" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;" class="input input-bordered"  />
                    <?php if(isset($_SESSION['pass_error'])):?>
                    <p class="text-red-600"><?= $_SESSION['pass_error']; ?></p>
                    <?php endif; unset($_SESSION['pass_error'])?>
                </div>
                <div class="form-control mt-6">
                    <button class="btn btn-primary" type="submit">Sign In</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php require 'footer.php'; ?>