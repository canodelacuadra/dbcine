 <nav aria-label="Resultados paginados">
     <ul class="pagination">
         <?php
            for ($i = 1; $i <= $num_paginas; $i++) :
                if ($i == $pagina_no) {
                    echo '<li class="page-item active">';
                } else {
                    echo '<li class="page-item">';
                }
            ?>
             <?php
                echo "<a class='page-link' href='?pagina_no=$i'>$i</a>";
                ?>
             </li>
         <?php
            endfor;
            ?>


         <?php ?>
     </ul>
 </nav>