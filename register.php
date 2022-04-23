<html>

<head>
    <title>Free Concert Website </title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body data-new-gr-c-s-check-loaded="14.1039.0" data-gr-ext-installed="">
    <div class="header">
        <div class="header-top">
            <div class="wrap">
                <div class="nav-wrap">
                    <ul class="group" id="example-one">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="concerts.html">Concerts</a></li>
                        <li><a href="login.html">Login</a></li>
                    </ul>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <div class="block">
            <div class="wrap">
                <form action="process_search.php" id="reservation-form" method="post" onsubmit="myFunction()">
                    <fieldset>
                        <div class="field">
                            <input type="text" placeholder="Search Concepts Here..." style="height:27px;width:500px" id="search111" name="searching">
                            <input type="submit" value="Search" style="height:28px;padding-top:4px" id="button111">
                        </div>
                    </fieldset>
                </form>
                <div class="clear"></div>
            </div>
        </div>
        <script>
            function myFunction() {
                if ($('#search111').val() == "") {
                    alert("Please enter a concert name..."); //empty searchBar field 
                }
            }
        </script>
        }
        <link rel="stylesheet" href="validation/dist/css/bootstrapValidator.css">
        <!-- =============================================== -->
        <script type="text/javascript" src="validation/dist/js/bootstrapValidator.js"></script>
        <!-- =============================================== -->
        <!--
@author: Vasilis Tsakiris
-->

    </div>
    <div class="content">
        <div class="wrap">
            <div class="content-top" style="min-height:300px;padding:50px">
                <div class="col-md-4 col-md-offset-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">Register</div>
                        <div class="panel-body">
                            <form action="process_registration.php" method="post" id="form1" novalidate="novalidate" class="bootstrap-validator-form">
                                <div class="form-group has-feedback">
                                    <input name="name" type="text" size="25" placeholder="Name" class="form-control">
                                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                                    <small class="help-block" style="display: none;"></small></div>
                                <div class="form-group has-feedback">
                                    <input name="age" type="text" size="25" placeholder="Age" class="form-control">
                                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                                    <small class="help-block" style="display: none;"></small></div>
                                <div class="form-group has-feedback">
                                    <select name="gender" class="form-control">
            <option value="">Select Gender</option>
            <option>Male</option>
            <option>Female</option>
        </select>
                                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                                    <small class="help-block" style="display: none;"></small></div>
                                <div class="form-group has-feedback">
                                    <input name="phone" type="text" size="25" placeholder="Mobile Number" class="form-control">
                                    <span class="glyphicon glyphicon-phone form-control-feedback"></span>
                                    <small class="help-block" style="display: none;"></small></div>
                                <div class="form-group has-feedback">
                                    <input name="email" type="text" size="25" placeholder="Email" class="form-control">
                                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                                    <small class="help-block" style="display: none;"></small></div>
                                <div class="form-group has-feedback">
                                    <input name="password" type="password" size="25" placeholder="Password" class="form-control">
                                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                    <small class="help-block" style="display: none;"></small></div>
                                <div class="form-group has-feedback">
                                    <input name="cpassword" type="password" size="25" placeholder="Password" class="form-control">
                                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                    <small class="help-block" style="display: none;"></small></div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
            <div class="clear"></div>

        </div>
        <!--
@author: JUSTIN MOUNISH
-->
        <div class="footer">
            <div class="wrap">
                <div class="footer-top">
                    <div class="col_1_of_4 span_1_of_4">
                        <div class="footer-nav">
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li><a href="concert_events.php">Concerts</a></li>
                                <li><a href="login.php">Login</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col_1_of_4 span_1_of_4">
                        <div class="textcontact">
                            <p>2020 MIC VIRTUSA PROJECT
                            </p>
                        </div>
                    </div>
                    <div class="col_1_of_4 span_1_of_4">
                        <div class="social">
                            <a href="https://www.linkedin.com/in/saharsh-justin-mathias-1929391b8/"><img src="images/linkedin.png" alt="" width="42" height="42"></a>
                            <a href="https://github.com/vasilisDev"><img src="images/github.png" alt="" width="42" height="42"></a>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>


        <!-- ================================================ -->
        <style>
            .content {
                padding-bottom: 0px !important;
            }
            
            #form111 {
                width: 500px;
                margin: 50px auto;
            }
            
            #search111 {
                padding: 8px 15px;
                background-color: #fff;
                border: 0px solid #dbdbdb;
            }
            
            #button111 {
                position: relative;
                padding: 6px 15px;
                left: -8px;
                border: 2px solid #207cca;
                background-color: #207cca;
                color: #fafafa;
            }
            
            #button111:hover {
                background-color: #fafafa;
                color: #207cca;
            }
        </style>
    </div>
    <script>
        $(document).ready(function() {
            $('#form1').bootstrapValidator({
                fields: {
                    name: {
                        verbose: false,
                        validators: {
                            notEmpty: {
                                message: 'The Name is required and can\'t be empty'
                            },
                            regexp: {
                                regexp: /^[a-zA-Z ]+$/,
                                message: 'The Name can only consist of alphabets'
                            }
                        }
                    },
                    age: {
                        verbose: false,
                        validators: {
                            notEmpty: {
                                message: 'The Age is required and can\'t be empty'
                            },
                            regexp: {
                                regexp: /^(0?[0-9]?[0-9]|1[01][0-1]|11[0-1])$/,
                                message: 'Enter a valid Age'
                            }
                        }
                    },
                    gender: {
                        verbose: false,
                        validators: {
                            notEmpty: {
                                message: 'The Gender is required and can\'t be empty'
                            }
                        }
                    },
                    phone: {
                        verbose: false,
                        validators: {
                            notEmpty: {
                                message: 'The Mobile Number is required and can\'t be empty'
                            },
                            regexp: {
                                regexp: /^[+]{1}[9]{1}[1]{1}[0-9]{10}$/,
                                message: 'Enter a valid Mobile Number'
                            }
                        }
                    },
                    email: {
                        verbose: false,
                        validators: {
                            notEmpty: {
                                message: 'The Email is required and can\'t be empty'
                            },
                            emailAddress: {
                                message: 'The input is not a valid email address'
                            }
                        }
                    },
                    password: {
                        verbose: false,
                        validators: {
                            notEmpty: {
                                message: 'The Password is required and can\'t be empty'
                            },
                            stringLength: {
                                min: 7,
                                message: 'The Password must be more than 7 characters long'
                            }
                        }
                    },
                    cpassword: {
                        verbose: false,
                        validators: {
                            notEmpty: {
                                message: 'The Confirm Password is required and can\'t be empty'
                            },
                            stringLength: {
                                min: 7,
                                message: 'The Confirm Password must be more than 7 characters long'
                            },
                            identical: {
                                field: 'password',
                                message: 'The  Password and Confirm Password are not the same'
                            }
                        }
                    }
                }
            });
        });
    </script>
</body>
<grammarly-desktop-integration data-grammarly-shadow-root="true"></grammarly-desktop-integration>

</html>