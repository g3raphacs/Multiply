        <!-- formulaire -->
        <div class="container txt-center">
            <form action="" method="GET">
                <?php
                    for($i=1 ; $i<11 ; $i++){
                        echo '<input type="checkbox" name="tables[]" id="check'.$i.'" value="'.$i.'">';
                        echo '<label for="check'.$i.'">'.$i.'</label>';
                    }
                ?>
                <button class="txt-white" type="submit">Afficher</button>
            </form>
        </div>