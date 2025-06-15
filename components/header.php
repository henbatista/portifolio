<?php
$nome = "Henrique Batista";
$titulo = "Desenvolvedor Fullstack PHP";
$bio = "Transformo necessidades em aplicações reais, evolutivas e funcionais. Desenvolvo sistemas através da minha paixão pela tecnologia, contribuindo com soluções inovadoras e eficazes para desafios complexos.";
$tecnologias = ["GitHub", "PHP", "CSS", "HTML", "Javascript"];
?>

<section 
  class="py-10 bg-cover bg-center bg-no-repeat"
  style="background-image: url('img/Intro.png');"
>  <div class="max-w-3xl mx-auto">
    <img src="https://avatars.githubusercontent.com/u/85231417?v=4" alt="Foto de perfil" class="w-28 h-28 rounded-full mx-auto border-4 border-purple-500 shadow-lg">
    
    <h1 class="mt-6 text-xl text-gray-300 font-mono">Hello World! Meu nome é 
      <span class="text-[#E3646E] font-semibold"><?= $nome ?></span> e sou
    </h1>
    
    <h2 class="mt-2 text-4xl sm:text-5xl font-extrabold text-white"><?= $titulo ?></h2>
    
    <p class="mt-4 text-lg text-gray-400 leading-relaxed">
      <?= $bio ?>
    </p>

    <div class="mt-6 flex flex-wrap justify-center gap-3">
      <?php foreach($tecnologias as $tech): ?>
        <span class="
          px-3 py-1 rounded-full text-sm font-semibold
          <?php
            switch(strtolower($tech)) {
              case 'php': echo 'bg-purple-700 text-white'; break;
              case 'html': echo 'bg-red-600 text-white'; break;
              case 'css': echo 'bg-blue-600 text-white'; break;
              case 'javascript': echo 'bg-yellow-400 text-black'; break;
              case 'github': echo 'bg-gray-800 text-white'; break;
              default: echo 'bg-gray-700 text-white';
            }
          ?>
        ">
          <?= $tech ?>
        </span>
      <?php endforeach; ?>
    </div>
  </div>
</section>
