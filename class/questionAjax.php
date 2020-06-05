<?php
class Question
{
    public $randnum = 0;
    public function __construct(int $id){
        echo
        '<section class="Quest tableSec txt-main-black">
            <header class="bck-main">
                <h2 class="QuestTitle txt-center f-18 flex"><span class="QuestTitleTxt txt-white quest">Question '.$id.' :</span></h2>
                <p class="QuestIcon txt-center"><img src="media/sad.svg" alt="" width="45"></p>
            </header>
            <div class="table bck-white">
                    <p class="flexspaceev f-15"><span class="QuestV1 txt-main">0</span> x <span class="QuestV2">0</span> = <span class="QuestRes txt-white bck-main">0</span><span class="QuestUser txt-white bck-main"><input class="QuestUserInput rep f-bold f-16 txt-white txt-center bck-main" type="number" placeholder="?" min="0" name="reponse[]" required /></span></p>
                    <input class="Vres" type="hidden" name="result[]" value="0" />
                    <input class="V1"type="hidden" name="val1[]" value="0" />
                    <input class="V2"type="hidden" name="val2[]" value="0" />
            </div>
        </section>';
    }
}