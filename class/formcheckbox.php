        <!-- formulaire -->
        <div class="container txt-center">
            <form class="flexcenter" action="" method="POST">
                <?php
                    for($i=1 ; $i<11 ; $i++){
                        echo '<input type="checkbox" name="tables[]" id="check'.$i.'" value="'.$i.'">';
                        echo '<label for="check'.$i.'">'.$i.'</label>';
                    }
                ?>
                <button class="txt-white btn-submit" type="submit"><img src="/media/validate.svg" alt="" width="40" height="40"></button>
            </form>
        </div>