<!DOCTYPE html>
<html lang="en" class="scroll-smooth hover:scroll-auto">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/output.css?t=<?=time()?>">
    <link rel="stylesheet" href="assets/bootstrap-icons/bootstrap-icons.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    
</head>
<body class="text-white body_bg h-full ">
                <span class="bi-circle text-red-400 circle"></span>
                <span class="bi-circle text-cyan-400  circle1"></span>
                 <span class="bi-circle text-cyan-400  circle3"></span>
                <span class="bi-circle text-cyan-400 circle2"></span>
                <span class="bi-circle text-red-400 circle4"></span>
                <span class="bi-circle text-red-400 circle5"></span>
    <!-- content wrapper -->
    <div class="grid md:grid-cols-3 overflow-hidden">
        <div class="md:col-span-1 md:flex md:justify-end ">
          <nav class="text-right ">
            <div class="flex justify-between items-center">
                    <h1 class="font-bold uppercase p-4 hover:text-red-400 hover:scale-y-150 transition ease-linear duration-150">
                        <a href="#" class="text-white text-2xl"><i class="bi bi-code-slash"></i> PaulCodeur</a>
                    </h1>
                    <div class="px-4 cursor-pointer md:hidden" id="trigger">
                      <svg xmlns="http://www.w3.org/2000/svg" id="menu_show" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 mr-5">
                        <path fill-rule="evenodd" d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z" clip-rule="evenodd" />
                      </svg>
                      
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8 hidden" id="hidden">
                        <path fill-rule="evenodd" d="M2.515 10.674a1.875 1.875 0 000 2.652L8.89 19.7c.352.351.829.549 1.326.549H19.5a3 3 0 003-3V6.75a3 3 0 00-3-3h-9.284c-.497 0-.974.198-1.326.55l-6.375 6.374zM12.53 9.22a.75.75 0 10-1.06 1.06L13.19 12l-1.72 1.72a.75.75 0 101.06 1.06l1.72-1.72 1.72 1.72a.75.75 0 101.06-1.06L15.31 12l1.72-1.72a.75.75 0 10-1.06-1.06l-1.72 1.72-1.72-1.72z" clip-rule="evenodd" />
                      </svg>
                      
                    </div>
                </div>
                <ul class="text-sm mt-10 hidden md:block" id="menu">
                    <li class="text-white text-xl font-bold  border-r-4 border-red-500 hover:text-red-400 hover:scale-y-150 transition ease-linear duration-150">
                        <a href="#home" class="px-4 flex justify-end">
                            <span class="mr-2">Home</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                            </svg>                            
                        </a>
                    </li>

                    <li class="text-white text-xl font-bold m-3 hover:text-red-400 hover:scale-y-150 transition ease-linear duration-150">
                        <a href="#about" class="px-4 flex justify-end">
                            <span class="mr-2">About</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                            </svg>                            
                        </a>
                    </li>

                    <li class="text-white text-xl font-bold m-3 hover:text-red-400 hover:scale-y-150 transition ease-linear duration-150 ">
                        <a href="#contact" class="px-4 flex justify-end">
                            <span class="block mr-2">Contact</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M8.625 9.75a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375m-13.5 3.01c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.184-4.183a1.14 1.14 0 01.778-.332 48.294 48.294 0 005.83-.498c1.585-.233 2.708-1.626 2.708-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
                            </svg>                            
                        </a>
                    </li>
                </ul>
            </nav>
        </div> 

        <main class="px-5  md:col-span-2 h-full" >
            <div class="hidden md:flex justify-center md:justify-end mt-7">
                <a href="" class="btn border-2 md:border-gray-600 text-white">Download Cv</a>
                <a href="tel:+243992773729" class="ml-3 btn border-2 md:border-gray-600">Appel moi</a>
            </div>

            <header class="flex mt-10 justify-between flex-col md:flex-row" id="home">
                <div>
                    <h2 class="text-red-400 text-xl animation_text1">Portfolio</h2>
                    <h3 class="text-2xl md:text-4xl text-cyan-400 font-bold"> Paul bebukya  <span id="mutliText" class="text-red-400"></span></h3>
                </div>
                <div class="mr-3">
                    <ul class="lien flex justify-end">
                        <li><a href="https://github.com/Paulbebukya"><i class='bx bxl-github'></i></a></li>
                        <li class="#"><a href="" class=""><i class="bx bxl-facebook " ></i></a></li>
                        <li><a href="tel:+243992773729"><i class='bx bx-phone-call'></i></a></li>
                        <li><a href="#"><i class='bx bxl-whatsapp'></i></a></li>

                    </ul>
                </div>
            </header>

            <section class="grid grid-cols-2 items-center">
                <div class="mt-3">
                    <h3 class="animation_text2 mb-5">Bonjour </h3>
                    <p class="animation_left  md:text-left">Je suis un jeune Developper , codeur  et  créateur de design, travaillant dans le développement web et  desktop. 
                     </p>

                     <div class="md:flex  md:justify-start items-end mt-7">
                        <a href="" class="hidden md:inline-block rounded-md border-2 p-2 border-gray-600 btn_two">Download Cv</a>
                        <a href="tel:+243992773729" class="md:ml-3  rounded-md border-2 p-2 border-gray-600 btn_two">Contact moi</a>
                    </div>
                </div>
                <div class="home_img">
                            <img src="images/img/mewhite.png" class="image">
                </div>
            </section>

         <section class="about mt-5 " id="about">
            <div class="content">
                
                <h5 class="text-red-400 text-xl animation_text2">Un mot sur moi ?</h5>
                <h2 class="font-bold   text-3xl title my-4">A propos de moi </h2>

                <div class="flex justify-start ">

                    <div class="md:w-4/5 animation_left">
                        <p class="w-full text-left">

                            J’aime transformer des problèmes complexes en problèmes simples et beaux
                            <br>
                            Mon objectif est  vous aider dans le monde numerique en vous permettant d'avoir des  applications web  ou desktop, de design  et  aussi site Web 
                        </p>
                        <h4 class="my-5 text-white uppercase ">Information personnelle</h4>
                        <ul class=" flex flex-wrap justify-between">
                            <div class="left">
                                <li class=" text-bold text-cyan-400 mb-1  p-1 ">
                                    <span class="text-white"> <i class="icone">></i>  Neé : </span>   07 . 07 . 1999 
                                </li>
     
                                <li class=" text-bold text-cyan-400 mb-1   p-1 ">
                                     <span class="text-white"> <i class="icone">></i>  SiteWeb : </span>  PaulBebukya.github.com
                                </li>

                                <li class=" text-bold text-cyan-400 mb-1 p-1 ">
                                    <span class="text-white">  <i class="icone">></i> Téléphone : </span>  +243 992773729
                               </li>

                               <li class=" text-bold text-cyan-400 mb-1 p-1 ">
                                <span class="text-white"> <i class="icone">></i> Localisation : </span>  RDC Goma
                           </li>

                            </div>

                            <div class="right">
                                <li class=" text-bold text-white  mb-1  p-1 ">
                                    <span class="text-red-400"> <i class="icone">></i> Age : </span>  <?php
                                     $dateBr = 1999;
                                     $dateCurrent = date("Y");
                                     echo $dateCurrent-$dateBr;
                                     ?>  
                                </li>
     
                                <li class=" text-bold text-white  mb-1 p-1 ">
                                     <span class="text-red-400"> <i class="icone">></i>  Niveau d'etude : </span> Licencié en info Gestion
                                </li>

                                <li class=" text-bold text-white  mb-1 p-1">
                                    <span class="text-red-400">  <i class="icone">></i>  Address mail: </span> Wise10paul@gmail.com
                               </li>

                               <li class=" text-bold text-white   mb-1  p-1">
                                <span class="text-red-400"> <i class="icone">></i>  Actuellement : </span> Disponible
                           </li>

                            </div>
                           

                            
                        </ul>
                        <h3 class="text-cyan-400 font-bold text-xl animation_text2 mt-10 text-end title_right ">Langage & Framework</h3>
                        <h5 class="font-bold text-xl text-red-400">Compétences Professionnelles</h5>
                        <div class="mt-3 flex justify-between flex-wrap stills">
                            <div class="left">
                                <span class="my-2 text-cyan-400 text-xl inline-block mb-5 ">FontEnd</span>
                                <ul class="">
                                    <li class="mb-4">
                                        <div class="flex justify-between">
                                            <span>Html</span>
                                            <span>60%</span>
                                        </div>
                                          <span class="bar_60"></span>
                                    </li>
                                
                                    <li class="mb-4">
                                        <div class="flex justify-between">
                                            <span>Css</span>
                                            <span>80%</span>
                                        </div>
                                         <span class="bar_80"></span>
                                    </li>

                                    <li class="mb-4">
                                        <div class="flex justify-between">
                                            <span>javascript</span>
                                            <span>60%</span>
                                        </div>
                                      <span class="bar_60"></span>
                                    </li>
                                </ul>

                                <span class="my-2 text-cyan-400 text-xl inline-block mb-5 ">BackEnd</span>
                                <ul>
                                    <li class="mb-4">
                                        <div class="flex justify-between">
                                            <span>php</span>
                                            <span>80%</span>
                                        </div>
                                         <span class="bar_80"></span>
                                    </li>
                                    <li class="mb-4">
                                        <div class="flex justify-between">
                                            <span>C#</span>
                                            <span>70%</span>
                                        </div>
                                         <span class="bar_70"></span>
                                    </li>
                                </ul>
                            </div>
                            <div class="right">
                                <span class="my-2 text-cyan-400 text-xl inline-block mb-5 ">Framework </span>
                                <ul>
                                    <li class="mb-4">
                                        <div class="flex justify-between">
                                            <span>laravel</span>
                                            <span>65%</span>
                                        </div>
                                        <span class="bar_65"></span>
                                    </li>

                                    <li class="mb-4">
                                        <div class="flex justify-between">
                                            <span>Bootstrap & Tailwind css</span>
                                            <span>80%</span>
                                        </div>
                                        <span class="bar_80"></span>
                                    </li>


                                    <li class="mb-4">
                                        <div class="flex justify-between">
                                            <span>Ajax</span>
                                            <span>85%</span>
                                        </div>
                                         <span class="bar_85"></span>
                                    </li>
                                </ul>

                                <span class="my-2 text-cyan-400 text-xl inline-block mb-5 ">Design & Photography</span>
                                <ul>

                                    <li class="mb-4">
                                        <div class="flex justify-between">
                                            <span>photoshop</span>
                                            <span>65%</span>
                                        </div>
                                        <span class="bar_65"></span>
                                    </li>

                                    <li class="mb-4">
                                        <div class="flex justify-between">
                                            <span>Figma & Adobe ui/ux</span>
                                            <span>50%</span>
                                        </div>
                                        <span class="bar_50"></span>
                                    </li>

                                    
                                </ul>
                            </div>
                        </div>
                    </div>

                    
                </div>
                 <span class="bi-circle text-red-400 circle1"></span>
                 <span class="bi-circle text-cyan-400  circle3"></span>
                <span class="bi-circle text-cyan-400 circle2"></span>
                <span class="bi-circle text-red-400 circle4"></span>
                <span class="bi-circle text-red-400 circle5"></span>
            </div>

        </section> 
           
        <section class="contact mt-20" id="contact">
            <div class="container md:grid md:grid-cols-3">
                <div class="left col-span-2">
                    <h2 class="font-bold text-cyan-300 text-3xl title my-4 animation_text1">CONTACTEZ-NOUS</h2>
                    <p class="text-gray-400">Question, commentaire ou préoccupation? Ce formulaire de contact est le meilleur moyen d’entrer en contact avec moi.</p>

                    <form action="" method='post' class="w-full my-5">
                        <div class="w-full md:flex pr-5">
                            <input type="email" name='email' placeholder="Adress mail *" class="md:w-1/2 w-full mb-3 input">
                            <input type="text" name='name' placeholder="Nom *" class="md:w-1/2 md:ml-2 w-full mb-3 input">
                        </div>
                        <div class="w-full mb-3 pr-5">
                            <input type="text" name='subject' placeholder="Sujet( facultatif)" class="w-full input">
                        </div>
                        <div class="w-full mb-4 pr-5">
                            <textarea name="message" id="" class='input w-full' cols="30" rows="10" placeholder="Message *"></textarea>
                        </div>
                        <button type='submit' name='send' class="border-2 border-red-400 py-2 px-8 rounded-full btn_two overflow-hidden">Envoyer</button>
                    </form>

                    <?php 
                        if(isset($_POST['send'])){
                            if(
                                !empty($_POST['email']) &&
                                !empty($_POST['name']) &&
                                !empty($_POST['subject']) &&
                                !empty($_POST['message']) 

                            ){
                                $email=$_POST['email'];
                                $name=$_POST['name'];
                                $subject=$_POST['subject'];
                                $message=$_POST['message'];
                                require_once 'send_email.php';

                            }
                        }
                    ?>
                </div>
                <div class="right md:col-span-1">
                    <h2 class="font-bold text-cyan-300 text-3xl title my-4 animation_text1">Localisation</h2>
                    <p class="text-gray-400 mb-4">
                         Souhaitez-vous développer  une applications, une fonctionnalité, un site web  ou un projet qui nécessite un codage. Je suis a votre disponibilité
                    </p>
                    <ul>
                        <li class="mb-2"> <span class="bg-gray-800 p-2 text-red-400 rounded-full inline-flex justify-center items-center"><i class='bx bx-map'></i></span>  - RDCongo - Nordkivu -Goma </li>
                        <li class="mb-2"> <span class="bg-gray-800 p-2 text-red-400 rounded-full inline-flex justify-center items-center"><i class='bx bx-envelope'></i></span>  - Wise10paul@gmail.com</li>
                        <li class="mb-2"> <span class="bg-gray-800 p-2 text-red-400 rounded-full inline-flex justify-center items-center"><i class='bx bx-phone'></i></span>  +243 992773729</li>

                        <li class="mb-2"> <span class="bg-gray-800 p-2 text-red-400 rounded-full inline-flex justify-center items-center"><i class='bx bxl-github'></i></span> - Paulbebukya</li>
                    
                    </ul>
                </div>
            </div>
             
        </section>

            <footer>
                <h6 class="text-white text-right font-bold text-sm mr-4">
                    <i class="bi bi-code-slash"></i>Paul Codeur </h6>
            </footer>  
        </main>
    </div>
    <script>
         const trigger = document.querySelector('#trigger');
      const menu = document.querySelector('#menu');
      const menu_show = document.querySelector('#menu_show');
      const hidden = document.querySelector('#hidden');

      trigger.addEventListener('click', ()=>{
        if(menu.classList.contains('hidden')){
          menu.classList.remove('hidden')
          menu_show.classList.add('hidden');
          hidden.classList.remove('hidden');

        }else{
          menu.classList.add('hidden');
          hidden.classList.add('hidden');
          menu_show.classList.remove('hidden');
        }
      })

    </script>
    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
    <script>
        let typedEffect = new Typed('#mutliText', {
            strings: ['Codeur', 'Designer', 'Developper', 'Photographer'],
            loop: true,
            typeSpeed: 100,
            backSpeed : 80,
            backDelay : 1500
            });      
    </script>
</body>
</html>