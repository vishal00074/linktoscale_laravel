
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    	<link rel="shortcut icon" href="frontend/static/admin/assets/images/favicon.png" />
        <title>INDEX:SCALE</title>
	
        <style>
            .adminlogin .fas {
                position: absolute;
                top: 46px;
                right: 16px;
                color: #9b8a8a;
            }
    		body#ad_login {
                background-repeat: no-repeat;
                background-size: cover;
                background-position:top center;
            }
            body#ad_login > .container {
                height: 100vh;
                display: flex;
                align-items: center;
                justify-content: space-between;
            }
            body#ad_login > .container form {
                margin: 0 auto;
                max-width:460px;
                width: 100%;
                background: #ffffff !important;
                border-radius: 5px;
                box-shadow: 0px 3px 14px #c7c2c2;
                border: 1px solid rgb(0 0 0 / 15%);
            	 transition: 0.5s;
            }
            body#ad_login input.form-control {
                height: 45px;
            }
            body#ad_login > .container form .form-group {
                margin-bottom: 10px;
                position: relative;
            }
            body#ad_login > .container form input.btn.btn-success:hover {
                background: #000;
                border-color: #000;
                transition: 0.5s;
            }
            body#ad_login > .container form input.btn.btn-success {
                width: 100%;
                background: #0093ff;
                border-radius: 4px;
                margin-top: 12px;
                font-weight: 600;
                font-size: 16px;
                text-transform: uppercase;
                height: 48px;
                border-color: #0093ff;
                transition: 0.5s;
            }
            body#ad_login > .container form:hover {
                border-color: #0093ff;
                box-shadow: 0px 3px 14px #767b7e;
            	transition: 0.5s;
            }
            .adminlogin .messages{
                color : red;
            }
        </style>
    </head>
    <body id="ad_login" style="background-image:url('frontend/static/admin-lte/images/Cubic-World.jpg');">
        <div class="container">
            <form  class="bg-info p-5 adminlogin" method="POST" action="{{route('adminLoginPost')}}">
                <h1 class="mb-4 text-center"><a href="#"><img src="frontend/static/admin-lte/images/link_mainlogo.png" alt="img"></a></h1>
                        
               
                        
                {{ csrf_field() }}
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" class="form-control" id="" placeholder="Enter Name">
                 </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" id="id_password" placeholder="Enter Password">
                    <i class="fas fa-eye" id="togglePassword"></i>
                </div>
                <div class="form-group" align="center">
                  <input type="submit" class="btn btn-success btn-lg" value="Submit">
                </div>
            </form>
        </div>


    
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#togglePassword').on('click',function(){
                    if($('#id_password').attr("type")==="password"){
                        $("#togglePassword").attr('class','fas fa-eye-slash');
                        $('#id_password').attr("type","text");
                    }else{
                        $("#togglePassword").attr('class','fas fa-eye');
                        $('#id_password').attr("type","password");
                    }
                });
            });
        </script>
    </body>
</html>
