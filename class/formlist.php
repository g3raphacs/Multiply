        <!-- formulaire -->
        <form class="flexcenter" action="" method="POST">
                <select class="btn-select txt-center f-bold" name="tables" id="pet-select">
                    <?php
                    for ($i=1 ; $i<11 ; $i++){
                        echo '<option class="txt-table'.$i.'" value="'.$i.'">'.$i.'</option>';
                    }
                    ?>
                </select>
                <button class="txt-white btn-submit bck-main" type="submit"><img src="/media/validate.svg" alt="" width="40" height="40"></button>
            </form>