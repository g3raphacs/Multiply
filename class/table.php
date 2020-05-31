<?php
class Table
{
    public function __construct(int $n){
        echo '<section id="table'.$n.'" class="tableSec txt-black">
        <header class="bck-white">
        <h2 class="txt-center flex"><span>La table du </span><span class="numA">'.$n.'</span></h2>
        </header>
        <div class="table bck-white">';
            for($i=1 ; $i<11 ; $i++){
                echo '<p class="flexspaceev"><span>'.$n.'</span> x <span>'.$i.'</span> = <span>'.($n*$i).'</span></p>';
            }
        echo '
        </div>
    </section>';
    }
}

