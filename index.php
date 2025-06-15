<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Portfólio - Henrique Batista</title>
  
  <!-- ✅ Tailwind CDN -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- ✅ Customização opcional (cores, fontes) -->
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            primary: '#16181D',
          },
        }
      }
    }
  </script>
</head>
<body class="bg-primary text-white font-sans">

  <?php include 'components/header.php'; ?>
  <?php include 'components/projects.php'; ?>
  <?php include 'components/contact.php'; ?>

</body>
</html>
