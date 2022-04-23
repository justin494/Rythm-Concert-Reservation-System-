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
        <div class="content">
            <div class="wrap">
                <div class="content-top">
                    <h3>Concerts</h3>

                    <div class="col_1_of_4 span_1_of_4">
                        <div class="imageRow">
                            <div class="single">
                                <a href="about.php?id=1"><img src="images/Metallica.png" alt=""></a>
                            </div>
                            <div class="movie-text">
                                <h4 class="h-text"><a href="about.php?id=1">Metallica</a></h4>
                                Members:<span class="color2">James Hetfield,Lars Ulrich,Kirk,Hammett,Robert Trujillo</span><br>
                            </div>
                        </div>
                    </div>

                    <div class="col_1_of_4 span_1_of_4">
                        <div class="imageRow">
                            <div class="single">
                                <a href="about.php?id=2"><img src="images/Scorpions.png" alt=""></a>
                            </div>
                            <div class="movie-text">
                                <h4 class="h-text"><a href="about.php?id=2">Scorpions
</a></h4>
                                Members:<span class="color2">Rudolf Schenker,Klaus Meine,Matthias Jabs,Pawel Maciwoda,Mikkey Dee</span><br>
                            </div>
                        </div>
                    </div>

                    <div class="col_1_of_4 span_1_of_4">
                        <div class="imageRow">
                            <div class="single">
                                <a href="about.php?id=3"><img src="images/acdc.png" alt=""></a>
                            </div>
                            <div class="movie-text">
                                <h4 class="h-text"><a href="about.php?id=3">AC/DC</a></h4>
                                Members:<span class="color2">Angus Young,Chris Slade,Stevie Young,Axl Rose</span><br>
                            </div>
                        </div>
                    </div>

                    <div class="col_1_of_4 span_1_of_4">
                        <div class="imageRow">
                            <div class="single">
                                <a href="about.php?id=8"><img src="images/gunsnroses.png" alt=""></a>
                            </div>
                            <div class="movie-text">
                                <h4 class="h-text"><a href="about.php?id=8">Guns N Roses</a></h4>
                                Members:<span class="color2">Axl Rose,Duff McKagan,Slash,Dizzy Reed,Richard Fortus,Frank Ferrer,Melissa Reese</span><br>
                            </div>
                        </div>
                    </div>

                    <div class="col_1_of_4 span_1_of_4">
                        <div class="imageRow">
                            <div class="single">
                                <a href="about.php?id=14"><img src="images/rolling.png" alt=""></a>
                            </div>
                            <div class="movie-text">
                                <h4 class="h-text"><a href="about.php?id=14">The Rolling Stones</a></h4>
                                Members:<span class="color2">Mick Jagger,Keith Richards,Charlie Watts,Ronnie Wood</span><br>
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
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="concerts.html">Concerts</a></li>
                                    <li><a href="login.html">Login</a></li>
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
    </div>
</body>
<grammarly-desktop-integration data-grammarly-shadow-root="true"></grammarly-desktop-integration>

</html>