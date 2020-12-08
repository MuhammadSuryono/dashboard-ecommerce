<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title_tab?></title>
    <link rel="stylesheet" href=<?=base_url()."assets/assets/css/bootstrap.css"?>>
    
    <link rel="stylesheet" href=<?=base_url()."assets/assets/css/app.css"?>>
    <link rel="shortcut icon" href=<?=base_url()."assets/assets/images/favicon.svg"?> type="image/x-icon">
</head>

<body>
    <div id="auth">
        
<div class="container">
    <div class="row">
        <div class="col-md-5 col-sm-12 mx-auto">
            <div class="card pt-4">
                <div class="card-body">
                    <div class="text-center mb-5">
                        <img src=<?=base_url()."assets/assets/images/logo_login.png"?> height="90" class='mb-4'>
                        <h3>Sign In</h3>
                        <p>Please sign in to continue to Dashboard.</p>
                    </div>
                    <form action="/">
                        <div class="form-group position-relative has-icon-left">
                            <label for="username">Username</label>
                            <div class="position-relative">
                                <input type="text" class="form-control" id="username">
                                <div class="form-control-icon">
                                    <i data-feather="user"></i>
                                </div>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left">
                            <div class="clearfix">
                                <label for="password">Password</label>
                            </div>
                            <div class="position-relative">
                                <input type="password" class="form-control" id="password">
                                <div class="form-control-icon">
                                    <i data-feather="lock"></i>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix">
                            <button class="btn btn-primary float-right">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

    </div>
    <script src=<?=base_url()."assets/assets/js/feather-icons/feather.min.js"?>></script>
    <script src=<?=base_url()."assets/assets/js/app.js"?>></script>
    
    <script src=<?=base_url()."assets/assets/js/main.js"?>></script>
</body>

</html>
