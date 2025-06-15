<?php
$contatos = [
  ["nome" => "Linkedin", "link" => "https://www.linkedin.com/in/wellington-henrique-batista-55a83556/"],
  ["nome" => "Instagram", "link" => "https://www.instagram.com/whenriquebatista/"],
  ["nome" => "GitHub", "link" => "https://github.com/henbatista"],
  ["nome" => "E-mail", "link" => "wellington.hen.batista@gmail.com"],
];
?>

<section 
  class="py-10 bg-cover bg-center bg-no-repeat text-center"
  style="background-image: url('img/Contact.png');"
>  <h2 class="text-purple-400 text-lg">Contato</h2>
  <h3 class="text-white text-2xl font-bold mb-2">Gostou do meu trabalho?</h3>
  <p class="text-gray-300 mb-6">Entre em contato ou acompanhe as minhas redes sociais!</p>
  <div class="flex flex-col gap-3 max-w-sm mx-auto">
    <?php foreach($contatos as $c): ?>
      <a href="<?= $c['link'] ?>" target="_blank" class="bg-gray-700 hover:bg-gray-600 text-white p-3 rounded flex justify-between items-center">
        <?= $c['nome'] ?>
        <span>↗</span>
      </a>
    <?php endforeach; ?>
  </div>
</section>
