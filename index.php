<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles.css">
    <script type="text/javascript" src="smoothscroll.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>


    <!--Script for smooth Scrolling-->
    <script>
        $(document).ready(function() {
            // Add smooth scrolling to all links
            $("a").on('click', function(event) {

                // Make sure this.hash has a value before overriding default behavior
                if (this.hash !== "") {
                    // Prevent default anchor click behavior
                    event.preventDefault();

                    // Store hash
                    var hash = this.hash;

                    // Using jQuery's animate() method to add smooth page scroll
                    // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 800, function() {

                        // Add hash (#) to URL when done scrolling (default click behavior)
                        window.location.hash = hash;
                    });
                } // End if
            });
        });
    </script>
</head>

<body>

    <!-- First div-->
    <div class="whole1" style="border:0px solid black">
        <div class="main" style="border:0px solid black">
            <!--Logo and Heading-->
            <ul>
                <li>
                    <div class=" container-fluid logo_main" style="border:0px solid black">
                        <div class="row">
                            <div style="border:0px solid black; width:30%; float:left ">
                                <img class="logo" src="logo.png">
                            </div>
                            <div style="border:0px solid black;float:right;font-size:60%;">
                                <h5 id="logop"> Research <br>and<br> Development</h5>
                            </div>
                        </div>
                    </div>
                </li>
                <!--Navigation Bar-->
                <li><a href="#aboutus">About Us</a></li>
                <li><a href="#ourlabs">Our Labs</a></li>
                <li><a href="#ourteam">Our Team</a></li>
                <li><a href="#contact">Contact Us</a></li>
            </ul>
            <!--Heading-->
            <div class="alltitle" style="padding-bottom:25%;">
                <div class="title1" style="border:0px solid black; width:90%; float:left;">
                    <h1 class="ht1" style="color:white;">RESEARCH & DEVELOPMENT</h1>
                    <hr class="hr1">
                    <h3 class="ht3">Create and Innovate</h3>
                </div>
                <!--Social media buttons-->
                <div style="border:0px solid black; width:5%; float:right; margin:10% 2% 0% 0%">
                    <a href="#" class="fa fa-facebook"></a><br>
                    <a href="#" class="fa fa-twitter"></a><br>
                    <a href="#" class="fa fa-google"></a><br>
                    <a href="#" class="fa fa-linkedin"></a><br>
                </div>
            </div>
        </div>
    </div>
    <!--End of First Div-->

    <!--Second div(On z-index)-->
    <div class="whole2" style="border:0px solid black">
        <div class="container-fluid second">
            <div class="row">
                <div class="col colt" id="b1">
                    <p class="p1" style="text-align: right; margin-right:20%;">
                        <b>Lorem Ipsum </b><br>is simply dummy text of the printing
                    </p>
                </div>
                <div class="col colt" id="b2">
                    <p class="p1">
                        <b>Lorem Ipsum</b> <br>Simply dummy text of the printing
                    </p>
                </div>
                <div class="col colt" id="b3">
                    <p class="p1" style="text-align: left; margin-left:20%;">
                        <b>Lorem Ipsum</b> <br>simply dummy text of the printing
                    </p>
                </div>
            </div>
        </div>
        <!--End of Second Div-->

        <!--Third div-->
        <div class="container-fluid third">
            <div class="row">
                <div class="col" style="background-color: rgba(217, 223, 226, 0.979);">
                    <p class="fir">
                        The Miracles Of Science
                    </p>
                </div>
                <div class="col">
                    <p class="firse">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus in suscipit tellus, ut pharetra lorem. Maecenas commodo, risus non pellentesque imperdiet, lectus risus ultricies turpis, eu bibendum quam libero id metus. Aliquam auctor justo non eleifend
                        aliquet. Donec condimentum augue eu lacus venenatis fringilla.
                    </p>
                </div>
            </div>
        </div>
        <!--End of Third Div-->

        <!--Fourth div(About Us)-->
        <div class="container-fluid fourth" id="aboutus" style="border:0px solid black">
            <div class="row" style="border:0px solid black">

                <div class="col colf" style="border:0px solid black">
                    <h1>About Us</h1>
                    <P style="font-size:120%"> Cras feugiat dui augue, in malesuada sem porta id. Mauris tempor aliquam risus eget sagittis. Nulla eu imperdiet mauris. Donec felis mi, tristique in sodales non, porttitor id orci. Mauris vulputate placerat justo vitae sollicitudin.
                        Nunc venenatis tortor dapibus magna commodo gravida.Suspendisse convallis eu dui at lacinia. </P>
                    <p style="font-size:120%"> Pellentesque a maximus ligula. Vivamus vitae consequat sem. Aenean at lacus erat. Integer leo nisl, commodo id pharetra non, ullamcorper ac nisl. Maecenas vel tempus lorem. Morbi nulla mi, dignissim vel facilisis sed, fermentum sit
                        amet ex. Vestibulum accumsan lacinia sapien at gravida. Fusce quis dui non nibh tincidunt maximus. Proin ullamcorper, lorem cursus rhoncus ornare, risus augue feugiat neque, vel faucibus augue nisl eu risus. Sed est orci, efficitur
                        eu mi semper, volutpat finibus magna. Nulla a tincidunt mi. Duis quis est semper nisi tempus iaculis. Phasellus euismod risus nibh. Ut vitae mauris sed ante vestibulum mattis at quis elit. Aenean quis sollicitudin ipsum. Nullam
                        bibendum dui ut dui molestie pulvinar.
                        <p style="font-size:120%"> Donec at ex vel mi vestibulum laoreet. Aenean consequat, urna aliquet ultricies scelerisque, arcu erat vulputate augue, pellentesque eleifend tellus risus nec nibh. Nullam molestie nisl sapien, quis blandit velit mattis in. Fusce
                            eleifend tortor vitae diam dignissim sollicitudin. Morbi est erat, venenatis eget laoreet maximus, mattis a eros. Mauris risus est, sollicitudin ut sem quis, vulputate commodo est. Aenean volutpat a magna eget faucibus. Sed
                            semper nec ex nec bibendum. </p>
                </div>
                <!--Second column-->
                <div class="col colf">
                    <div class="container-fluid" style="margin:5% 0 5% 5%" ;>
                        <div class="row">
                            <div class="col" style="float:left;background-image:url(chem11.jpg);background-size:cover;">
                                <p style="margin: 40% 0 40% 0"> </p>
                            </div>
                            <div class="col" style="float:left;background-color: rgba(217, 223, 226, 0.979);">
                                <h1 style="text-align:center;margin: 40% 0 40% 0;">Donec at ex vel mi vestibulum laoreet</h1>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col" style="float:left;background-color: rgba(217, 223, 226, 0.979);">
                                <h1 style="text-align:center;margin: 40% 0 40% 0;"> Donec at ex vel mi vestibulum laoreet</h1>
                            </div>
                            <div class="col" style="float:left;background-image:url(chem11.jpeg);background-size:cover;">
                                <p style="margin: 40% 0 40% 0"></p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

        <!--OUR LABS DIV-->
        <div class="whole3" id="ourlabs" style="border:0px solid black">
            <!--First table-->
            <h1>Our Labs</h1>
            <div class="container-fluid first" style="border:0px solid black;background-color:black;">
                <div class="row" style="padding:4% 0 2% 2%">
                    <div class="col cold">
                        <img src="chem4.jpg" style="height:100%" class="image img1" style="border:0px solid black">
                        <div class="middle">
                            <div class="text">Hello World</div>
                        </div>
                    </div>
                    <div class="col cold">
                        <img src="chem7.jpg" style="height: 100%" class="image img2" style="border:0px solid black">
                        <div class="middle">
                            <div class="text">Hello World</div>
                        </div>
                    </div>
                    <div class="col cold">
                        <img src="chem6.jpg" style="height: 100%" class="image img2" style="border:0px solid black">
                        <div class="middle">
                            <div class="text">Hello World</div>
                        </div>
                    </div>
                    <div class="col cold">
                        <img src="chem5.jpg" style="height: 100%" class="image img2" style="border:0px solid black">
                        <div class="middle">
                            <div class="text">Hello World</div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End of First table-->

            <!--Second table-->
            <div class="container-fluid first" style="border:0px solid black;background-color:black;">
                <div class="row" style="padding:2% 0 6% 2%">
                    <div class="col cold">
                        <img src="chem10.jpg" class="image img1" style="height: 100%" style="border:0px solid black">
                        <div class="middle">
                            <div class="text">Hello World</div>
                        </div>
                    </div>
                    <div class="col cold">
                        <img src="chem8.jpg" class="image img2" style="border:0px solid black">
                        <div class="middle">
                            <div class="text">Hello World</div>
                        </div>
                    </div>
                    <div class="col cold">
                        <img src="chem9.jpg" class="image img2" style="border:0px solid black">
                        <div class="middle">
                            <div class="text">Hello World</div>
                        </div>
                    </div>
                    <div class="col cold">
                        <img src="chem3.jpg" class="image img2" style="border:0px solid black">
                        <div class="middle">
                            <div class="text">Hello World</div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End of Second Table-->
        </div>
        <!--End of Our Labs-->
        
        <!--Contact form-->
        <div class="mf1" id="contact">
            <div class="mainform">
                <form name="myform" action="insert.php" target="_self" method="POST" style=" width:100%">
                    <h1 style="margin-left:12%;color:white;">Contact Us</h1>
                    <input type="text" id="uname" class="form1" name="uname" placeholder="Name">
                    <br>
                    <input type="Password" id="upass" class="form1" name="upass" placeholder="Password">
                    <br>
                    <input type="email" id="eemail" class="form1" name="eemail" placeholder="Email">
                    <br>
                    <input type="tel" id="phone" class="form1" name="phone" placeholder="Phone No.">
                    <br>
                    <input type="submit"  class="submit" id="submit" name="submit" onclick="myclear()" value="Submit"  style="margin-left:40%">
                </form>
            </div>
        </div>
        <script>
            function myclear () {
                var frm = document.getElementsByName('myform')[0];
                frm.submit(); // Submit
                frm.reset();  // Reset
                return false; // Prevent page refresh
            }
</script>
        <!--End-->

        <!--Team div-->
        <div class="whole4" id="ourteam" style="border:0px solid black">
            <h1>Our Team</h1>
            <div class="row" style="border:0px solid black">
                <div class="col column" style="border:0px solid black">
                    <div class="card">
                        <div class="one">
                            <img src="doc1.jpg" alt="Jane" width=90%>
                            <h2>Jan Doe</h2>
                            <p class="title">CEO &amp; Founder</p>
                           
                            <p style="font-size:150%"><button class="button" class="btn btn-primary" data-toggle="collapse" data-target="#demo2">Contact</button></p>
                            <div id="demo2" class="collapse" style="padding-bottom:2%">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br> Ut enim ad minim veniam.
    
  </div>
                        </div>
                    </div>
                </div>


                <div class="col column" style="border:0px solid black">
                    <div class="card">
                        <div class="one">
                            <img src="doc2.jpg" alt="Jane" width=90%>
                            <h2>Jane Doe</h2>
                            <p class="title">CEO &amp; Founder</p>
                            
                            <p style="font-size:150%"><button class="button" class="btn btn-primary" data-toggle="collapse" data-target="#demo">Contact</button></p>
                            <div id="demo" class="collapse" style="padding-bottom:2%">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br> Ut enim ad minim veniam.
    
  </div>
                        </div>
                    </div>
                </div>

                <div class="col column" style="border:0px solid black">
                    <div class="card">
                        <div class="one">
                            <img src="doc3.jpg" alt="Jane" width=90%>
                            <h2>Jane Doe</h2>
                            <p class="title">CEO &amp; Founder</p>
                            
                            <p style="font-size:150%"><button class="button" class="btn btn-primary" data-toggle="collapse" data-target="#demo1">Contact</button></p>
                            <div id="demo1" class="collapse" style="padding-bottom:2%">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br> Ut enim ad minim veniam.
        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End-->


        <!--Map div-->
        <div class="contact " style="border:0px solid black ">
            <div id="googleMap " style="width:100%;height:400px; "></div>

            <script>
                function myMap() {
                    var mapProp = {
                        center: new google.maps.LatLng(51.508742, -0.120850),
                        zoom: 5,
                    };
                    var map = new google.maps.Map(document.getElementById("googleMap "), mapProp);
                }
            </script>
            <script src="https://maps.googleapis.com/maps/api/js?key=A IzaSyDdGQUsMWa9y9dXkcufoIolw77TKKhFSl8 &callback=myMap "></script>
        </div>
        <!--End of Map Div-->

</body>

</html>