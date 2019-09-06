<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Agencia rodeo</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
  <meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
  <meta name="author" content="FreeHTML5.co" />


  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
  
  <!-- Animate.css -->
  <link rel="stylesheet" href="css/animate.css">
  <!-- Icomoon Icon Fonts-->
  <link rel="stylesheet" href="css/icomoon.css">
  <!-- Themify Icons-->
  <link rel="stylesheet" href="css/themify-icons.css">
  <!-- Bootstrap  -->
  <link rel="stylesheet" href="css/bootstrap.css">

  <!-- Magnific Popup -->
  <link rel="stylesheet" href="css/magnific-popup.css">

  <!-- Magnific Popup -->
  <link rel="stylesheet" href="css/bootstrap-datepicker.min.css">

  <!-- Owl Carousel  -->
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">

  <!-- Theme style  -->
  <link rel="stylesheet" href="css/style.css">
  <style type="text/css">
            .form-sec{width:400px; background:#ccc; padding:15px;width: 400px;
    background: #f8f9fa;padding: 15px;box-shadow: 0 0 4px #ccc;}
body{
  font-family: 'Roboto', sans-serif;
  font-weight: 400;
}
h1,h2,h3,h4,h5,h6{
  font-family: 'Source Sans Pro', sans-serif;
  font-weight: 900;
  letter-spacing: 0.25px;
}

.wrapper{
  padding: 30px 15px;
}
.row{
  max-width: 1024px;
  margin: 0px auto;
}

*,*:before,*:after{
  box-sizing: border-box;
}
.cf:before,
.cf:after{
  display: table;
  content: " ";
}
.cf:after{
  clear: both
}

.header{
  text-align: center;
  padding: 0px 15px;
  margin-bottom: 30px;
}
.header h1{
  font-size: 2.8rem;
}
.header p{
  font-size: 1.3rem;
  line-height: 150%;
}

/*fancy card styling*/
.cards{

}
.fancy-card{
  background: #eee;
  width: 100%;
  display: block;
  float: left;
  position: relative;
  box-shadow: 0px 0px 0px 0px rgba(0, 0, 0, 0);
  transition: all 250ms ease-in;
  min-height: 300px;
  background-size: cover;
  background-position: center center;
  margin-bottom: 30px;
}
.fancy-card.one{
   background-image: url("https://media-cdn.tripadvisor.com/media/photo-s/01/56/c0/26/dique-cuesta-del-viento.jpg");
}
.fancy-card.two{
   background-image: url("http://www.sanjuanintenso.com/images/iglesiarodeo1.jpg");
}
.fancy-card.three{
   background-image: url("https://www.fotopaises.com/Fotos-Paises/t/2008/10/31/2472_1225407896.jpg");
}

.fancy-card .bg-overlay{
    background: rgba(0,0,0,0.25);
    position: absolute;
    top: 0px;
    left: 0px;
    width: 100%;
    height: 100%;
    transition: all 200ms linear;
}
.fancy-card .content{
  padding: 30px 40px;
  color: #fff;
  text-align: center;
  position: absolute;
  top: 0px;
  left: 0px;
  width: 100%;
  height: 100%;
  display: flex;
  flex-wrap: nowrap;
  align-items: center;
  flex-direction: row;
}
.fancy-card .content .primary{
  text-transform: uppercase;
  width: 100%;
  transition: all 250ms ease-out 200ms;
  opacity: 1;
  transform: translate3d(0px, 0px, 1px);
}
.fancy-card .content .secondary{
  position: absolute;
  opacity: 0;
  left: 0px;
  transform: translate3d(0px, 30px, 1px);
  transition: all 200ms linear 0ms;
  padding-left: 35px;
  padding-right: 35px;
}

.fancy-card .button{
  border: solid 1px #fff;
  padding: 8px 12px;
  display: inline-block;
  border-radius: 2px;
  margin: 12px auto;
}


/*horizontal border elements (top & bottom)*/
.fancy-card .v-border{
  position: absolute;
  top: 0%;
  left: 0%;
  width: 100%;
  height: 100%;
}
.fancy-card .v-border:before,
.fancy-card .v-border:after{
  width: 0%;
  height: 1px;
  left: 50%;
  transition: all 250ms ease-out;
  background: #fff;
}
.fancy-card .v-border:before{
  content: '';
  top: 10%;
  position: absolute;
}
.fancy-card .v-border:after{
  content: '';
  bottom: 10%;
  position: absolute;
}

/*horizontal elements (left & right)*/
.fancy-card .h-border{
  position: absolute;
  top: 0%;
  left: 0%;
  width: 100%;
  height: 100%;
}
.fancy-card .h-border:before,
.fancy-card .h-border:after{
  height: 0%;
  top: 50%;
  width: 1px;
  transition: all 250ms ease-out;
  background: #fff;
}
.fancy-card .h-border:before{
  content: '';
  left: 10%;
  height: 0%;
  position: absolute;
}
.fancy-card .h-border:after{
  content: '';
  right: 10%;
  position: absolute;
}


/*hover states for interactivity*/
.fancy-card:active .v-border:before,
.fancy-card:active .v-border:after,
.fancy-card:hover .v-border:before,
.fancy-card:hover .v-border:after{
  width: 90%;
  left: 5%;
}
.fancy-card:active .h-border:before,
.fancy-card:active .h-border:after,
.fancy-card:hover .h-border:before,
.fancy-card:hover .h-border:after{
  height: 90%;
  top: 5%;
}

/*hovering over card, shadow effect*/
.fancy-card:active,
.fancy-card:hover{
  box-shadow: 10px 10px 0px 0px rgba(0, 0, 0, 0.3);
}
/*hovering over card, adjust primary element*/
.fancy-card:active .content .primary,
.fancy-card:hover .content .primary{
  opacity: 0;
  transform: translate3d(0px, 20px, 1px);
  transition: all 200ms linear 0ms;
}
/*hoverijng over card, adjust secondary element*/
.fancy-card:active .content .secondary,
.fancy-card:hover .content .secondary{
  opacity: 1;
  transform: translate3d(0px, 0px, 1px);
  transition: all 200ms linear 200ms;
}

/*hovering over card, adjust background overlay*/
.fancy-card:active .bg-overlay,
.fancy-card:hover .bg-overlay{
  background: rgba(0,0,0,0.45);
}




/*medium and large profiles*/
@media screen and (min-width: 768px){
  
  .fancy-card{
    width: 30%;
    margin: 0% 1.66% 3.33% 1.66%;
  }
  
}</style>