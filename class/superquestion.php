
<?php
class Question
{
    public $randnum = 0;
    public function __construct(int $id){
        $n = rand(2,10);
        $randnum = rand(2,10);
        echo
        '<section class="tableSec txt-main-black">
            <header class="bck-main">
                <h2 class="txt-center f-18 flex"><span class="txt-white quest">Question '.$id.' :</span></h2>
            </header>
            <div class="table bck-white">
                    <p class="flexspaceev f-15"><span class="txt-table'.$n.'">'.$n.'</span> x <span>'.$randnum.'</span> = <span class="txt-white bck-table'.$n. '"><input class="rep f-bold f-16 txt-white txt-center bck-table'.$n. '" type="number" placeholder="?" min="0" name="reponse[]" required /></span></p>
                    <input type="hidden" name="result[]" value="'.($randnum*$n).'" />
                    <input type="hidden" name="val1[]" value="'.$n.'" />
                    <input type="hidden" name="val2[]" value="'.$randnum.'" />
            </div>
        </section>';
    }
}