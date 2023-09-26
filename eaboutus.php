<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <title>Employee About Us</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        
        .sec-1 h1{
            text-align: center;
            display: flex;
            justify-content: center;
        }
        .sec-2 h3{
            text-align: center;
            font-size: 3em;
            font-family: 'Poppins', sans-serif;
        }
        .img {
            overflow: hidden;
        }
        .img img{
            transition: all 1.5s ease;
        }
        .img:hover img{
            transform: scale(1.5);
        }
        .sector-1{
            margin-top: 30px;
        }
        .content p{
            margin: 20px 50px;
            transition: 0.3s ease;
        }
        .content p:hover{
            color: red;
            font-weight: 500;
            transition: 0.3s ease;
        }
        .sec-3{
            padding: 5%;
            margin: 0 !important;
            display: flex;
            justify-content: space-between;
        }
        .sec-3-main{
            background-color: black;
            margin-top: 60px;
        }
        .sec-3-icon{
            margin-top: 35px;
        }
        .sec-3-icon i{
            border: 1px solid transparent;
            padding: 8px 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, .1), 0 8px 16px rgba(0, 0, 0, .1);
            color: white !important;
            margin-right: 10px;
            border-radius: 8px;
        }
        .sec-3 p{
            color: #ccc;
        }
        .sec-3 li{
            color: #ccc;
        }
        .sec-3 h3{
            color: #fff;
        }
        .sec-3 i{
            color: #fff;
        }
        .sec-3-contect-1{
            display: flex;
            align-items: center;
        }
        .sec-3-contect-1 p{
            margin-left: 10px;
            color: #fff;
        }
        .sec-3-contect-2{
            display: flex;
            align-items: center;
        }
        .sec-3-contect-2 p{
            margin-left: 10px;
            color: #fff;
        }
        .sec-3-contect-3{
            display: flex;
            align-items: center;
        }
        .sec-3-contect-3 p{
            margin-left: 10px;
            color: #fff;
        }
        .sec-3-p4 p{
            margin-top: 0;
            margin-bottom: 10px;
            padding-top: 5px;
        }
        .sec-3-icon-1{
            display: flex;
            align-items: center;
            margin-left: 38%;
            color: #fff;
        }
        .sec-3-icon-1 a{
            text-decoration: none;
            color: #DCBE4A;
        }
        .sec-3-icon-1 i{
            margin-right: 10px;
        }
        .sec-3 i:hover{
            color: black !important;
            background-color: white;
            transition: 0.5s ease;
        }
        /* header */
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
            header{
                width: 100%;
                padding: 20px 100px;
                display: flex;
                justify-content: space-between;
                align-items: center;
                z-index: 99;
            }
            .logo{
                font-size: 2em;
                color: black;
                user-select: none;
            }
            .navigation a{
                position: relative;
                font-size: 1.1em;
                color: black !important;
                text-decoration: none;
                font-weight: 500;
                margin-left: 40px;
            }
            .navigation a::after{
                content: "";
                position: absolute;
                width: 100%;
                height: 3px;
                background: black;
                opacity: 0.3;
                border-radius: 5px;
                left: 0;
                bottom: -6px;
                transform: scaleX(0);
                transition: transform 0.5s;
                transform-origin: right;
            }
            .navigation a:hover::after{
                transform: scaleX(1);
                transform-origin: left;
            }
            .sec-3 ul li:hover{
                text-decoration: underline;
                transition: 0.5s;
                color: yellowgreen;
            }
    </style>
</head>
<body>

        <!-- header -->
        <header>
            <h2 class="logo">Logo</h2>
            <nav class="navigation">
              <a href="index.php">Home</a>
              <a href="#">About</a>
              <a href="#">Services</a>
              <a href="#">content</a>
            </nav>
        </header>
    
    <div class="sec-1">
        <h1>
            About Us
        </h1>
    </div>
    <!-- section-content -->
    <div class="content text-center">
        <h2>
            What is Lorem Ipsum?
        </h2>
        <p>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
            It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
        </p>
    </div>
        
    <!-- section-2 -->
    <div class="sec-2">
            <h3>
                Project Manager & Director's
            </h3>

        <div class="container">
            <div class="sector">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card">
                            <div class="img">
                                <img src="https://content.gallup.com/origin/gallupinc/GallupSpaces/Production/Cms/WORKPLACEV9CMS/uxumu2-gdus6ddsesh68xw.jpg" class="card-img-top" alt="...">
                            </div>
                                
                            <div class="card-body">
                                <h5 class="card-title">Joe Doe</h5>
                                <p class="card-text">CEO of The Company </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="img">
                                <img src="https://content.gallup.com/origin/gallupinc/GallupSpaces/Production/Cms/WORKPLACEV9CMS/cimsxj1lo0y5zgve_oqznw.jpg" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Manager</h5>
                                <p class="card-text">Project Director</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                    <div class="card">
                        <div class="img">
                            <img src="https://images.inc.com/uploaded_files/image/1920x1080/getty_690028746_284206.jpg" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Employee</h5>
                            <p class="card-text">Programmer of Project No.2</p>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
                
        <div class="container">
            <div class="sector-1">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card">
                            <div class="img">
                                <img src="https://cdn.shrm.org/image/upload/c_crop%2Ch_705%2Cw_1254%2Cx_0%2Cy_15/c_fit%2Cf_auto%2Cq_auto%2Cw_767/v1/Legal%20and%20Compliance/reviewing_paperwork_and_on_computer_pierld?databtoa=eyIxNng5Ijp7IngiOjAsInkiOjE1LCJ4MiI6MTI1NCwieTIiOjcyMCwidyI6MTI1NCwiaCI6NzA1fX0%3D" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Employee</h5>
                                <p class="card-text">Programmer of Project No.3</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="img">
                                <img src="https://shrm-res.cloudinary.com/image/upload/c_crop,h_710,w_1261,x_0,y_99/w_auto:100,w_1200,q_35,f_auto/v1/Legal%20and%20Compliance/businesswoman_on_laptop_lkegmm.jpg" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Employee</h5>
                                <p class="card-text">Programmer of Project No.4</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="img">
                                <img src="https://www.simplilearn.com/ice9/free_resources_article_thumb/Employee_and_Employer_Relationship.jpg" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Employee</h5>
                                <p class="card-text">Programmer of Project No.5</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- section-3 -->
    <div class="sec-3-main">
        <div class="sec-3">
            <div class="sec-3-p1">
                <div class="sec-3-icon">
                    <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    <a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    <a href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                </div>
            </div>
            <div class="sec-3-p2">
                <h3>Quick Links</h3>
                <hr>
                <ul>
                    <li>About Us</li>
                    <li>Our Service</li>
                    <li>Our Team</li>
                    <li>Features</li>
                    <li>Cannabies Store</li>
                </ul>
            </div>
            <div class="sec-3-p3">
                <h3>Explore</h3>
                <hr>
                <ul>
                    <li>Recreation Shop</li>
                    <li>News & Articles</li>
                    <li>FAQ's</li>
                    <li>Privacy Policy</li>
                    <li>Terms & Conditions</li>
                </ul>
            </div>
            <div class="sec-3-p4">
                <div class="sec-3-p4-1">
                    <h3>Contact Us</h3>
                    <hr>
                    <div class="sec-3-contect-1">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <p>Phone</p>
                    </div>
                    <p>+1-3454-5678-77</p>
                    <div class="sec-3-contect-2">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <p>Email</p>
                    </div>
                    <p>hello@muva.com</p>
                    <div class="sec-3-contect-3">
                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                        <p>Address</p>
                    </div>
                    <p>2767 Sunrise Street, NY 1002, USA</p>
                </div>
            </div>
        </div>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>   
</body>
</html>