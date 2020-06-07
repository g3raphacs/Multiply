
<?php
class Reponse
{
    public $randnum = 0;
    public function __construct(int $val1 , int $val2 , int $reponse ){


        echo
        '<section class="tableSec txt-main-black">';

            if($reponse==($val1*$val2)){
                echo'<header class="bck-table4"><h2 class="txt-center f-18 flex"><span class="txt-white quest">Réponse : '.$reponse.'</span></h2><p class="txt-center"><img src="media/happy.svg" alt="" width="45"></p>';
                global $score;
                $score=$score+1;
            }
            else{
                echo'<header class="bck-table8"><h2 class="txt-center f-18 flex"><span class="txt-white quest">Réponse : '.$reponse.'</span></h2><p class="txt-center"><img src="media/sad.svg" alt="" width="45"></p>';
            }

        echo'</header>
            <div class="table bck-white">
                    <p class="flexspaceev f-15"><span class="txt-table'.$val1.'">'.$val1.'</span> x <span>'.$val2.'</span> = <span class="txt-white bck-table'.$val1.'">'.($val1*$val2).'</span></p>
            </div>
        </section>';
    }
}