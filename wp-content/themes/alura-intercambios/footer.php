   <footer>
      <p class="container-alura">&copy; <?= date(format: "Y") ?> - Todos os dereitos reservados a Alura Intercambios</p>
   </footer>

</body>

<?php 
/* aqui chamamos uma função nativa do WP que são ganchos destinados ao cabeçalho e ao rodapé de um tema do WP 
OBS: ele unido ao wp_head em suas devidas pastas fazem exibir o menu de controle do WP */
Wp_footer(); 
?>

</html>