
<?php
class Reponse
{
    public $randnum = 0;
    public function __construct(int $val1 , int $val2 , int $reponse ){
        $coul;
        if($reponse==($val1*$val2)){
            $coul=4;
            global $score;
            $score=$score+1;
        }
        else{$coul=8;}

        echo
        '<section id="table'.$val1.'" class="tableSec txt-main-black">
            <header class="bck-table'.$coul.'">
                <h2 class="txt-center f-18 flex"><span class="txt-white quest">Réponse : '.$reponse.'</span></h2>
            </header>
            <div class="table bck-white">
                    <p class="flexspaceev f-15"><span class="txt-table'.$val1.'">'.$val1.'</span> x <span>'.$val2.'</span> = <span class="txt-white bck-table'.$val1.'">'.($val1*$val2).'</span></p>
            </div>
        </section>';
    }
}