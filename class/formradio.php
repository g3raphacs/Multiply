        <!-- formulaire -->
            <form class="flexcenter wrap" action="" method="POST">
                <?php
                    for($i=1 ; $i<11 ; $i++){
                        echo '<input class="checkbox" type="radio" name="tables[]" id="check'.$i.'" value="'.$i.'">';
                        echo '<label class="btn-table f-bold txt-table'.$i.'" for="check'.$i.'">'.$i.'</label>';
                    }
                ?>
                <button class="txt-white btn-submit bck-main" type="submit"><img src="/media/validate.svg" alt="" width="40" height="40"></button>
            </form>