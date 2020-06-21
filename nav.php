<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/boo.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/slick.min.js"></script>
    <style>
          #head{
        float:right;
      }
		    ul li {
        display: inline-block;
        font-weight:bold;
      }
      nav>img{
        height:50px;
        width:90px;
        float:left;
        color:white;
      }
      .v1{
        float:right;
        right:0;
      }
      nav>ul li a {
        color:black;
        text-decoration: none;
        padding: 15px;
        display: block;
      }
      nav>ul li a:hover {
        color:White;
        text-decoration: none;
        padding: 15px;
        display: block;
      }
      nav>ul li:hover {
        color:White;
        background:#105863;
        text-decoration:none;
      }
      nav>ul ul {
        position: absolute;
        min-width: 200px;
        background: #f8f8f8;
        display: none;
      }
      nav>ul ul li {
        display: block;
        background-image: linear-gradient(to right, #105863, lightblue);
      }
      nav>ul li:hover ul {
        display: block;
      }
      nav>ul li i {
        color: #FFF;
        float: right;
        padding-left: 20px;
      }
      nav div {
        color: #FFF;
        font-size: 24px;
        padding: 0.6em;
        cursor: pointer;
        display: none;
      }
      nav{
        width:100%;
       background-image: linear-gradient(to right, #105863, lightblue);
        height:55px;
        position:fixed;
        top:0;
        z-index:20;
        border-bottom:#105863 solid 5px;
        height:60px;
      }
      .grid-container {
        display: grid;
        grid-template-columns: 50% 50%;
        grid-gap: 10px;
        background-color:rgb(22, 22, 22);
        padding: 10px;
      }
      .grid-container > div {
        background-color: rgba(192,192,192 ,0.1);
        text-align: center;
        padding: 20px 0;
        font-size: 30px;
        color:#FFF
      }
      .grid-container-social-media {
        display: grid;
        grid-template-columns: 25% 25% 25% 25%;
        padding-top:10%;
      }
      .grid-container-social-media > div {
        text-align: center;
        font-size: 30px;
        color:#FFF
      }
      @media(max-width: 768px) {
        nav{
          width:100%;
        }
        nav div {
          display: block;
        }
        nav>ul 
        {
          display: none;
          position: static;
         background-image: linear-gradient(to right, #105863, lightblue);
          float:left;
          width:100%;
        }
        nav>ul li {
          display: block;
        }
        nav>ul ul {
          position: static;
          background-image: linear-gradient(to right, #105863, lightblue);
        }
        .grid-container {
          display: grid;
          grid-template-columns: 100%;
          grid-gap: 10px;
          padding: 0.2%;
        }
        .flip3Dfront{
          width:100%;
        }
        .tagline{
          line-height:100%;
        }
        .containerTicker{
          width:100px;
          margin-left:25%;
        }
        .tagline{
          margin:10px;
          ;
          font-size:32px;
          color:black;
          line-height: 150%;
        }
      }
    </style>
</head>

<body>
    <nav>            
         <a href="index.php"><img src="logo.gif" style="margin-top:-2px; margin-left:50px; height:55px; width:78px; float:left;"></a>
                        <div style="float:right; right:0;">
                              <i class="fa fa-bars navbar-right"></i>
                        </div>
                        <div style="float:right;" class=" d-lg-none d-md-none"><a href="donateus.php"  class="btn btn-primary">Donate Us</a></div>
                        <ul  style="float:right;">
                        
                              <li><a href="/">Home</a></li>
                              <li><a href="#">About Us<i class="fa fa-sort-desc navbar-right"></i></a>
                                    <ul id="subHeader">
                                          <li><a href="/aboutus.php#vi">Vision</a></li>
                                          <li><a href="/aboutus.php#pj">Mission</a></li>
                                          <li><a href="/aboutus.php#n">Our Team</a></li>
                                          
                                    </ul>
                              </li>
                              <li><a href="#">Our Impact <i class="fa fa-sort-desc navbar-right"></a></i>
                                    <ul id="subHeader">
                                          <li><a href="ourimpact.php#eduction">Child Education</a></li>
                                          <li><a href="ourimpact.php#env">Environment</a></li>
                                          <li><a href="ourimpact.php#hel">Health</a></li>
                                          <li><a href="ourimpact.php#san">Sanitation</a></li>
                                          <li><a href="ourimpact.php#liv">Livelihood</a></li>
                                          <li><a href="ourimpact.php#div">Divyang</a></li>
                                          <li><a href="ourimpact.php#enem">Employment</a></li>
                                    </ul>
                              </li>
                              <li><a href="#">Projects<i class="fa fa-sort-desc navbar-right"></a></i>
                                    <ul id="subHeader">
                                          <li><a href="projects.php#sa">Sapne Ki Pathshaala</a></li>
                                          <li><a href="projects.php#sh">Shakti</a></li>
                                          <li><a href="projects.php#dr">Draw your Dream</a></li>
                                        
                                          <li><a href="projects.php#Aa">Aayaam</a></li>
                                    </ul>
                              </li>
                              <li><a href="blessingsbyvip.php">Blessings by VIP</a></li>
                              <li><a href="joinus.php">Join Us<i class="fa fa-sort-desc navbar-right"></a></i>
                                    <ul id="subHeader">
                                          <li><a href="joinus.php">As a Volunteer</a></li>
                                          <li><a href="joinus.php#memb">As a Member</a></li>
                                          <li><a href="joinus.php#inte">As a Intern</a></li>
                                          <li><a href="joinus.php#par">As a Partner</a></li>
                                          <li><a href="joinus.php#pat">As a Patron</a></li>
                                    </ul>
                              </li>
                              <li class="mr-5 d-none d-md-inline" ><a href="donateus.php"  class="btn btn-primary">Donate Us</a></li>
                        </ul>
                    </nav>
                   
</body>

</html>