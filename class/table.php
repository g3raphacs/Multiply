<?php
class Table
{
    public function __construct(int $n){
        echo '<section id="table'.$n.'" class="tableSec txt-black">
        <header class="bck-main-light">
        <h2 class="txt-center flex f-18"><span class="txt-white">La table du </span><span class="numA bck-white txt-table'.$n.'">'.$n.'</span></h2>
        </header>
        <div class="table bck-white">';
            for($i=1 ; $i<11 ; $i++){
                echo '<p class="flexspaceev"><span class="txt-table'.$n.'">'.$n.'</span> x <span>'.$i.'</span> = <span class="txt-white bck-table'.$n.'">'.($n*$i).'</span></p>';
            }
        echo '</div></section>';
    }
}

