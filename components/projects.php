<?php
$projetos = [
  [
    "nome" => "Clone TabNews",
    "descricao" => "É uma plataforma online, focada na comunidade de tecnologia, onde usuários podem compartilhar e discutir notícias e artigos, além de interagir com comentários e criar conteúdos relevantes para a área",
    "img" => "img/tabnews.svg",
    "tecnologias" => ["Node", "CSS", "HTML", "Javascript", "Next.js", "React", "PostgreSQL"],
    "link_github" => "https://github.com/henbatista/clone-tabnews"
  ],
  [
    "nome" => "Blog Henrique Batista",
    "descricao" => "Blog pessoal",
    "img" => "img/logo.VWUUC8T2.svg",
    "tecnologias" => ["Node", "CSS", "HTML", "Javascript", "Vue.Js"],
    "link_github" => "https://github.com/henbatista/BlogHenriBatista"
  ],
  [
    "nome" => "Cadastro De Endereços",
    "descricao" => "Este repositório contém o código-fonte e a documentação para um sistema de cadastro de endereços, projetado para simplificar o gerenciamento de informações de endereços. O sistema oferece funcionalidades de inserção, edição e exclusão de endereços, e integra-se perfeitamente com a API ViaCep para obter detalhes de endereços a partir de um CEP.",
    "img" => "img/logo.png",
    "tecnologias" => ["Node", "CSS", "HTML", "Javascript", "Vue.Js"],
    "link_github" => "https://github.com/henbatista/cadastroDeEnderecos"
  ],
  [
    "nome" => "Marketplace de Roupas",
    "descricao" => "Recursos Listagem de produtos com nome, preço e imagem. Modal com detalhes do produto ao clicar em um item. Navbar com opções de navegação. Filtro por categoria de produto. Design inspirado na imagem da Nike.",
    "img" => "img/logo.png",
    "tecnologias" => ["React.js", "CSS", "HTML", "Javascript", "Prisma", "Supabase"],
    "link_github" => "https://github.com/seu-usuario/tech-news"
  ],
];
?>
<section class="py-10">
  <h2 class="text-center text-xl text-red-300">Meu trabalho</h2>
  <h3 class="text-center text-2xl font-bold">Veja os projetos em destaque</h3>
  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-6 mt-6 mx-20">
    <?php foreach($projetos as $projeto): ?>
      <div class="bg-gray-800 p-4 rounded shadow">
        <div class="flex  justify-between">
        <img src="<?= $projeto['img'] ?>" alt="<?= $projeto['nome'] ?>" class="w-10 rounded mb-3 text-white">
        <a href="<?= $projeto['link_github'] ?>" target="_blank" class="inline-block mt-auto bg-purple-600 hover:bg-purple-700 text-white text-sm font-medium px-4 py-2 rounded">
          Ver no GitHub
        </a>

        </div>
        <h4 class="text-white text-lg font-bold"><?= $projeto['nome'] ?></h4>
        <p class="text-gray-400"><?= $projeto['descricao'] ?></p>
        <div class="mt-2 flex gap-2 flex-wrap">
          <?php foreach($projeto['tecnologias'] as $tech): ?>
            <span class="bg-gray-700 px-2 py-1 text-sm rounded"><?= $tech ?></span>
          <?php endforeach; ?>
         
        </div>
        
      </div>
      
    <?php endforeach; ?>
    
  </div>
</section>
