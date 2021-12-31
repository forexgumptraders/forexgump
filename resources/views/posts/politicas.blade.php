<x-app-layout>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<!-- Footer -->

<style>
	/*  import google fonts */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Ubuntu:wght@400;500;700&display=swap');

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    text-decoration: none;
}
html{
    scroll-behavior: smooth;
}

/* custom scroll bar */
::-webkit-scrollbar {
    width: 10px;
}
::-webkit-scrollbar-track {
    background: #f1f1f1;
}
::-webkit-scrollbar-thumb {
    background: #888;
}

::-webkit-scrollbar-thumb:hover {
    background: #555;
}

/* all similar content styling codes */
section{
    padding: 100px 0;
}
.max-width{
    max-width: 1300px;
    padding: 0 80px;
    margin: auto;
}
.about, .services, .skills, .teams, .contact, footer{
    font-family: 'Poppins', sans-serif;
}
.about .about-content,
.services .serv-content,
.skills .skills-content,
.contact .contact-content{
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-between;
}
section .title{
    position: relative;
    text-align: center;
    font-size: 40px;
    font-weight: 500;
    margin-bottom: 60px;
    padding-bottom: 20px;
    font-family: 'Ubuntu', sans-serif;
}
section .title::before{
    content: "";
    position: absolute;
    bottom: 0px;
    left: 50%;
    width: 180px;
    height: 3px;
    background: #111;
    transform: translateX(-50%);
}
section .title::after{
    position: absolute;
    bottom: -8px;
    left: 50%;
    font-size: 20px;
    color: #DC3545;
    padding: 0 5px;
    background: #fff;
    transform: translateX(-50%);
}

/* navbar styling */
.navbard{
    position: fixed;
    width: 100%;
    z-index: 999;
    padding: 20px 0;
    font-family: 'Ubuntu', sans-serif;
    transition: all 0.3s ease;
}
.navbard.sticky{
    padding: 20px 0px;
    background: crimson;
}
.navbard .max-width{
    display: flex;
    align-items: center;
    justify-content: space-between;
}
.navbard .logo a{
    color: #fff;
    font-size: 30px;
    font-weight: 600;
}
.navbard .logo a span{
    color: crimson;
    transition: all 0.3s ease;
}
.navbard.sticky .logo a span{
    color: #fff;
}
.navbard .menu li{
    list-style: none;
    display: inline-block;
}
.navbard .menu li a{
    display: block;
    color: #fff;
    font-size: 18px;
    font-weight: 500;
    margin-left: 25px;
    transition: color 0.3s ease;
}
.navbard .menu li a:hover{
    color: crimson;
}
.navbard.sticky .menu li a:hover{
    color: #fff;
}

/* menu btn styling */
.menu-btn{
    color: #fff;
    font-size: 23px;
    cursor: pointer;
    display: none;
}
.scroll-up-btn{
    position: fixed;
    height: 45px;
    width: 45px;
    background: crimson;
    left: 30px;
    bottom: 10px;
    text-align: center;
    line-height: 45px;
    color: #fff;
    z-index: 1150;
    font-size: 30px;
    border-radius: 6px;
    border-bottom-width: 2px;
    cursor: pointer;
    opacity: 0;
    pointer-events: none;
    transition: all 0.3s ease;
}
.scroll-up-btn.show{
    bottom: 30px;
    opacity: 1;
    pointer-events: auto;
}
.scroll-up-btn:hover{
    filter: brightness(90%);
}


/* home section styling */
.home{
    display: flex;
    background-image: linear-gradient(to left top, #1f2937, #3b365c, #723770, #af2e68, #dc3545);
    height: 100vh;
    color: #fff;
    min-height: 500px;
    background-size: cover;
    background-attachment: fixed;
    font-family: 'Ubuntu', sans-serif;
}
.home .max-width{
  width: 100%;
  display: flex;
}
.home .max-width .row{
  margin-right: 0;
}
.home .home-content .text-1{
    font-size: 27px;
}
.home .home-content .text-2{
    font-size: 75px;
    font-weight: 600;
    margin-left: -3px;
}
.home .home-content .text-3{
    font-size: 40px;
    margin: 5px 0;
}
.home .home-content .text-3 span{
    color: crimson;
    font-weight: 500;
}
.home .home-content a{
    display: inline-block;
    background: none;
    color: white;
    font-size: 25px;
    padding: 12px 36px;
    margin-top: 20px;
    font-weight: 400;
    border-radius: 6px;
    border: 2px solid white;
    transition: all 0.3s ease;
}


/* about section styling */
.about .title::after{
    content: "about us";
}
.about .about-content .left{
    width: 45%;
}
.about .about-content .left img{
    height: 400px;
    width: 400px;
    object-fit: cover;
    border-radius: 6px;
}
.about .about-content .right{
    width: 100%;
}
.about .about-content .right .text{
    font-size: 25px;
    font-weight: 600;
    margin-bottom: 10px;
}
.about .about-content .right .text span{
    color: crimson;
}
.about .about-content .right p{
    text-align: justify;
}
.about .about-content .right a{
    display: inline-block;
    background: #dc3545;
    color: #fff;
    font-size: 20px;
    font-weight: 500;
    padding: 10px 30px;
    margin-top: 20px;
    border-radius: 6px;
    border: 2px solid #dc3545;
 
    transition: all 0.3s ease;
}
.about .about-content .right a:hover{
    color: crimson;
    background: none;
}

/* services section styling */
.services, .teams{
    color:#fff;
    background: #111;
}
.services .title::before,
.teams .title::before{
    background: #fff;
}
.services .title::after,
.teams .title::after{
    background: #111;
    content: "what we provide";
}
.services .serv-content .card{
    width: calc(33% - 20px);
    background: #222;
    text-align: center;
    border-radius: 6px;
    padding: 35px 25px;
    cursor: pointer;
    transition: all 0.3s ease;
}
.services .serv-content .card:hover{
    background: crimson;
}
.services .serv-content .card .box{
    transition: all 0.3s ease;
}
.services .serv-content .card:hover .box{
    transform: scale(1.05);
}
.services .serv-content .card i{
    font-size: 50px;
    color: crimson;
    transition: color 0.3s ease;
}
.services .serv-content .card:hover i{
    color: #fff;
}
.services .serv-content .card .text{
    font-size: 25px;
    font-weight: 500;
    margin: 10px 0 7px 0;
}

/* skills section styling */

.skills .title::after{
    content: "our successes";
}
.skills .skills-content .column{
    width: calc(50% - 30px);
}
.skills .skills-content .left .text{
    font-size: 20px;
    font-weight: 600;
    margin-bottom: 10px;
}
.skills .skills-content .left p{
    text-align: justify;
}
.skills .skills-content .left a{
    display: inline-block;
    background: crimson;
    color: #fff;
    font-size: 18px;
    font-weight: 500;
    padding: 8px 16px;
    margin-top: 20px;
    border-radius: 6px;
    border: 2px solid crimson;
    transition: all 0.3s ease;
}
.skills .skills-content .left a:hover{
    color: crimson;
    background: none;
}
.skills .skills-content .right .bars{
    margin-bottom: 15px;
}
.skills .skills-content .right .info{
    display: flex;
    margin-bottom: 5px;
    align-items: center;
    justify-content: space-between;
}
.skills .skills-content .right span{
    font-weight: 500;
    font-size: 18px;
}
.skills .skills-content .right .line{
    height: 5px;
    width: 100%;
    background: lightgrey;
    position: relative;
}
.skills .skills-content .right .line::before{
    content: "";
    position: absolute;
    height: 100%;
    left: 0;
    top: 0;
    background: crimson;
}
.skills-content .right .html::before{
    width: 90%;
}
.skills-content .right .css::before{
    width: 60%;
}
.skills-content .right .js::before{
    width: 80%;
}
.skills-content .right .php::before{
    width: 50%;
}
.skills-content .right .mysql::before{
    width: 70%;
}

/* teams section styling */
.teams .title::after{
    content: "Our testimonials";
}
.teams .carousel .card{
    background: #222;
    border-radius: 6px;
    padding: 25px 35px;
    text-align: center;
    overflow: hidden;
    transition: all 0.3s ease;
}
.teams .carousel .card:hover{
    background: crimson;
}
.teams .carousel .card .box{
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    transition: all 0.3s ease;
}
.teams .carousel .card:hover .box{
    transform: scale(1.05);
}
.teams .carousel .card .text{
    font-size: 25px;
    font-weight: 500;
    margin: 10px 0 7px 0;
}
.teams .carousel .card img{
    height: 150px;
    width: 150px;
    object-fit: cover;
    border-radius: 50%;
    border: 5px solid crimson;
    transition: all 0.3s ease;
}
.teams .carousel .card:hover img{
    border-color: #fff;
}
.owl-dots{
    text-align: center;
    margin-top: 20px;
}
.owl-dot{
    height: 13px;
    width: 13px;
    margin: 0 5px;
    outline: none!important;
    border-radius: 50%;
    border: 2px solid crimson!important;
    transition: all 0.3s ease;
}
.owl-dot.active{
    width: 35px;
    border-radius: 14px;
}
.owl-dot.active,
.owl-dot:hover{
    background: crimson!important;
}

/* contact section styling */
.contact .title::after{
    content: "get in touch";
}
.contact .contact-content .column{
    width: calc(50% - 30px);
}
.contact .contact-content .text{
    font-size: 20px;
    font-weight: 600;
    margin-bottom: 10px;
}
.contact .contact-content .left p{
    text-align: justify;
}
.contact .contact-content .left .icons{
    margin: 10px 0;
}
.contact .contact-content .row{
    display: flex;
    height: 65px;
    align-items: center;
}
.contact .contact-content .row .info{
    margin-left: 30px;
}
.contact .contact-content .row i{
    font-size: 25px;
    color: crimson;
}
.contact .contact-content .info .head{
    font-weight: 500;
}
.contact .contact-content .info .sub-title{
    color: #333;
}
.contact .right form .fields{
    display: flex;
}
.contact .right form .field,
.contact .right form .fields .field{
    height: 45px;
    width: 100%;
    margin-bottom: 15px;
}
.contact .right form .textarea{
    height: 80px;
    width: 100%;
}
.contact .right form .name{
    margin-right: 10px;
}
.contact .right form .field input,
.contact .right form .textarea textarea{
    height: 100%;
    width: 100%;
    border: 1px solid lightgrey;
    border-radius: 6px;
    outline: none;
    padding: 0 15px;
    font-size: 17px;
    font-family: 'Poppins', sans-serif;
    transition: all 0.3s ease;
}
.contact .right form .field input:focus,
.contact .right form .textarea textarea:focus{
    border-color: #b3b3b3;
}
.contact .right form .textarea textarea{
  padding-top: 10px;
  resize: none;
}
.contact .right form .button-area{
  display: flex;
  align-items: center;

}
.right form .button-area button{
  color: #fff;
  display: block;
  /*width: 160px!important;*/
   width: 100%;
  height: 45px;
  outline: none;
  font-size: 18px;
  font-weight: 500;
  border-radius: 6px;
  cursor: pointer;
  flex-wrap: nowrap;
  background: crimson;
  border: 2px solid crimson;
  transition: all 0.3s ease;

}
.right form .button-area button:hover{
  color: crimson;
  background: none;
}
/* footer section styling */
footer{
    background: #111;
    padding: 15px 23px;
    color: #fff;
    text-align: center;
}
footer span a{
    color: crimson;
    text-decoration: none;
}
footer span a:hover{
    text-decoration: underline;
}


/* responsive media query start */
@media (max-width: 1104px) {
    .about .about-content .left img{
        height: 350px;
        width: 350px;
    }
}

@media (max-width: 991px) {
    .max-width{
        padding: 0 50px;
    }
}
@media (max-width: 947px){
    .menu-btn{
        display: block;
        z-index: 999;
    }

    .home-content{
    	margin-top: -200px;
    }


    .menu-btn i.active:before{
        content: "\f00d";
    }
    .navbard .menu{
        position: fixed;
        height: 100vh;
        width: 100%;
        left: -100%;
        top: 0;
        background: crimson;
        text-align: center;
        padding-top: 80px;
        transition: all 0.3s ease;
    }
    .navbard .menu.active{
        left: 0;
    }
    .navbard .menu li{
        display: block;
    }
    .navbard .menu li a{
        display: inline-block;
        margin: 20px 0;
        font-size: 25px;
    }
    .home .home-content .text-2{
        font-size: 70px;
    }
    .home .home-content .text-3{
        font-size: 35px;
    }
    .home .home-content a{
        font-size: 23px;
        padding: 10px 30px;
    }
    .max-width{
        max-width: 930px;
    }
    .about .about-content .column{
        width: 100%;
    }
    .about .about-content .left{
        display: flex;
        justify-content: center;
        margin: 0 auto 60px;
    }
    .about .about-content .right{
        flex: 100%;
    }
    .services .serv-content .card{
        width: calc(50% - 10px);
        margin-bottom: 20px;
    }
    .skills .skills-content .column,
    .contact .contact-content .column{
        width: 100%;
        margin-bottom: 35px;
    }
}

@media (max-width: 690px) {
    .max-width{
        padding: 0 23px;
    }
    .home .home-content .text-2{
        font-size: 60px;
    }
    .home .home-content .text-3{
        font-size: 32px;
    }
    .home .home-content a{
        font-size: 20px;
    }
    .services .serv-content .card{
        width: 100%;
    }
}

@media (max-width: 500px) {
    .home .home-content .text-2{
        font-size: 50px;
    }
    .home .home-content .text-3{
        font-size: 27px;
    }
    .about .about-content .right .text,
    .skills .skills-content .left .text{
        font-size: 19px;
    }
    .contact .right form .fields{
        flex-direction: column;
    }
    .contact .right form .name,
    .contact .right form .email{
        margin: 0;
    }
    .right form .error-box{
       width: 150px;
    }
    .scroll-up-btn{
        right: 15px;
        bottom: 15px;
        height: 38px;
        width: 35px;
        font-size: 23px;
        line-height: 38px;
    }
}


.home-contentSlider img{
    margin-left: 70px;
    max-width: 250px;
    max-height: 250px;
}

#home-contentSliderInicio img{
    
	position: absolute;
    margin-left: 150px;
    margin-top: -120px;
}


.home-contentSlider #lines {
    opacity: 0;
    z-index: 999;
    transition: 1s ease-in-out;
}

.home-contentSlider .spin {
   
    animation-name: spin;
    animation-duration: 40000ms;
    animation-iteration-count: infinite;
    animation-timing-function: linear;
}

@keyframes spin{
    from {
        transform:rotate(0deg);
    }
    to {
        transform:rotate(360deg);
    }
}
	
.puntos{
	font-size: 50px;
}

.puntos p{

}

 .sombras-xl {
    width: 100px;
    height: 100px;
    text-align: center;
    margin: auto;
    margin-top: 20px;
    border-radius: 50%;
    display: table;
}
.contenido {
    border-radius: 50%;
    color: #fff7f7;
    font-size: 4em;
    height: 100%;
    display: table-cell;
    vertical-align: middle;
    text-shadow: 
    1px 1px #393E46,
    2px 2px #393E46,
    3px 3px #393E46,
    4px 4px #393E46,
    5px 5px #393E46,
    6px 6px #393E46,
    7px 7px #393E46,
    8px 8px #393E46,
    9px 9px #393E46,
    10px 10px #393E46,
    11px 11px #393E46,
    12px 12px #393E46,
    13px 13px #393E46,
    14px 14px #393E46,
    15px 15px #393E46,
    16px 16px #393E46,
    17px 17px #393E46,
    18px 18px #393E46,
    19px 19px #393E46,
    20px 20px #393E46,
    21px 21px #393E46,
    22px 22px #393E46,
    23px 23px #393E46,
    24px 24px #393E46,
    25px 25px #393E46,
    26px 26px #393E46,
    27px 27px #393E46,
    28px 28px #393E46,
    29px 29px #393E46,
    30px 30px #393E46,
    31px 31px #393E46,
    32px 32px #393E46,
    33px 33px #393E46,
    34px 34px #393E46,
    35px 35px #393E46,
    36px 36px #393E46,
    37px 37px #393E46,
    38px 38px #393E46,
    39px 39px #393E46,
    40px 40px #393E46,
    41px 41px #393E46,
    42px 42px #393E46,
    43px 43px #393E46,
    44px 44px #393E46,
    45px 45px #393E46,
    46px 46px #393E46,
    47px 47px #393E46,
    48px 48px #393E46,
    49px 49px #393E46,
    50px 50px #393E46,
    51px 51px #393E46,
    52px 52px #393E46,
    53px 53px #393E46,
    54px 54px #393E46,
    55px 55px #393E46,
    56px 56px #393E46,
    57px 57px #393E46,
    58px 58px #393E46,
    59px 59px #393E46,
    60px 60px #393E46,
    61px 61px #393E46,
    62px 62px #393E46,
    63px 63px #393E46,
    64px 64px #393E46,
    65px 65px #393E46,
    66px 66px #393E46,
    67px 67px #393E46,
    68px 68px #393E46,
    69px 69px #393E46,
    70px 70px #393E46,
    71px 71px #393E46,
    72px 72px #393E46,
    73px 73px #393E46,
    74px 74px #393E46,
    75px 75px #393E46,
    76px 76px #393E46,
    77px 77px #393E46,
    78px 78px #393E46,
    79px 79px #393E46,
    80px 80px #393E46,
    81px 81px #393E46,
    82px 82px #393E46,
    83px 83px #393E46,
    84px 84px #393E46,
    85px 85px #393E46,
    86px 86px #393E46,
    87px 87px #393E46,
    88px 88px #393E46,
    89px 89px #393E46,
    90px 90px #393E46,
    91px 91px #393E46,
    92px 92px #393E46,
    93px 93px #393E46,
    94px 94px #393E46,
    95px 95px #393E46,
    96px 96px #393E46,
    97px 97px #393E46,
    98px 98px #393E46,
    99px 99px #393E46,
   100px 100px#393E46;
   mix-blend-mode:hard-light;
   overflow: hidden;
}

.instagram {
background: -webkit-linear-gradient(to right, #fcb045, #fd1d1d, #833ab4);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #fcb045, #fd1d1d, #833ab4); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
}


</style>



    <!-- about section start -->
    <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">Política de Privacidad</h2>

            <div class="about-content">
                <div class="column left">

                  <div class="home-contentSlider">
                   <!--   <img src="resources/images/equipo.png" alt="" class="spin" > -->
                  </div>

                </div>
                <div class="column right">
                    
                    <p>FOREXGUMP se compromete a tratar de forma absolutamente confidencial los datos de carácter personal del Usuario, adoptando las medidas de seguridad de índole técnica y organizativas necesarias para garantizar la seguridad de los mismos y evitar su alteración, pérdida, tratamiento y/o acceso no autorizado. FOREXGUMP asegura, dentro de lo posible y conforme al estado actual de la tecnología, la confidencialidad e integridad de los datos e información que los usuarios faciliten para cumplir con las finalidades antes indicadas.

Respecto a la seguridad y protección de sus Datos Personales, FOREXGUMP se adhiere expresamente a los requerimientos de la Ley Nacional de Protección de Datos Personales N° 25.326 y sus normas complementarias. La información por usted proporcionada será tratada conforme los sistemas de seguridad de datos utilizados por FOREXGUMP en concordancia con la normativa vigente y sólo se utilizará de acuerdo con los límites establecidos en los presentes términos y condiciones. FOREXGUMP se esfuerza por ofrecer el más alto nivel de seguridad respecto a estos.

FOREXGUMP únicamente reúne sus datos personales cuando usted los proporciona en forma directa y con su consentimiento expreso e informado. Toda la información que usted nos proporcione se tratará con sumo cuidado y con la mayor seguridad posible, FOREXGUMP utiliza la información que usted proporciona para personalizar y mejorar nuestros servicios y para fines estadísticos.</p>
                
                </div>
            </div>
        </div>
    </section>






<!-- Footer -->

<style>
	a{
		text-decoration: none;
		color: white;

	}

	a:hover{
		color: #dc3545;
	}

	.unirse{
		border-radius: 30px;
	}

	.unirse a{
		color: white;
	}

	.unirse a:hover{
		color: white;
	}

    footer{
        background-color: #1f2937;
    }

    .footer-copyright{
         background-image: linear-gradient(to left top, #1f2937, #3b365c, #723770, #af2e68, #dc3545);
    }

    .nosotros{
        text-align: left;
        margin-top: 20px;
    }

    .nosotros ul li{
        margin-top: 10px;
        font-size: 16px;
    }

      .nosotros .imgInst{
        margin-left: 45%;
    }


</style>

<footer class="page-footer font-small stylish-color-danger text-danger pt-4">

  <!-- Footer Links -->
  <div class="container text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-4 mx-auto">

        <!-- Content -->
   
         <a href="/" class="icon flex-shrink-0 flex text-center items-center mt-3 mb-4">
          Forex<span class="iconSecundario">.Gump</span> 
        </a>
        <p>Comenza hoy con nuestro plan de trading y empeza a recibir señales por nuestra pagina.</p><br>
        <p class="text-white">“La bondad es la única inversión que nunca quiebra.” Henry David Thoreau</p>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="nosotros col-md-4 mx-auto">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Nosotros</h5>

        <ul class="list-unstyled">
          <li>
            <a href="/politicas">Politicas de Privacidad</a>
          </li>
          <li>
            <a href="/terminos">Terminos y Condiciones</a>
          </li>
          <li>
            <a href="/contactanos">Contacto</a>
          </li>
          <li>
            <a href="/nosotros">Quiénes somos</a>
          </li>
        </ul>

      </div>

      <hr class="clearfix w-100 d-md-none">

      <div class="nosotros col-md-1 mx-auto">

        <!-- Links -->
        <h5 class="text-white text-center font-weight-bold text-uppercase mt-3 mb-2">Seguinos</h5>

        <ul class="list-unstyled">
          <li>
            <a href="https://www.instagram.com/f0rex_gump/?hl=es-la">
             <div class="sombras-xl instagram">
                <div class="contenido">
                    <i class="fa-brands fa-instagram"></i>         
                </div>        
             </div>
            </a>
          </li>
        
        </ul>

      </div>
      <!-- Grid column -->


      

      <!-- Grid column -->
 
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <hr class="bg-white">

   <ul class="list-unstyled list-inline text-center py-2">
      <li class="list-inline-item">
        <h5 class="mb-1">Unete ahora</h5>
      </li>
      <li class="list-inline-item unirse bg-danger">
        <a href="register" class="btn btn-outline-white btn-rounded">Registrarme</a>
      </li>
    </ul>


  <!-- Copyright -->
  <div class="footer-copyright bg-danger text-white text-center py-3">© 2022 Copyright:
    <a href="https://mdbootstrap.com/"> www.forexgump.com</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
	
</x-app-layout>