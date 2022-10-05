<?php

function createDropdownMenu(int $childCount, array $dropDownInfos){
    echo <<<HTML
    <li class="$dropDownInfos[parentItemClass]">
        <!-- <div class="link-container"> -->
            <a class="$dropDownInfos[parentLinkClass]" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">$dropDownInfos[parentLinkName]</a>
        <!-- </div> -->
        <ul class="$dropDownInfos[listClass]">
    HTML;
    createNavItem($childCount, $dropDownInfos['childLinksNames'], $dropDownInfos['childLinksLink'], $dropDownInfos['childLinksClass'], "");
    echo <<<HTML
        </ul>
    </li>
    HTML;
}

function createNavItem(int $count, array $linkName, array $childLink, string $linkClasses="nav-link", string $itemClasses="nav-item"){
    for ($i=0; $i < $count; $i++) {
        echo <<<HTML
        <li class="$itemClasses"><a class="$linkClasses" href="$childLink[$i].php">$linkName[$i]</a></li>
        HTML; 
    }
}

function addImg(int $count, array $args){
    $imgName = $args['imgName'];
    $firsticontext = $args['firstIconText'];
    $secondiconText = $args['secondIconText'];

    for ($i=0; $i < $count; $i++) { 
        echo <<<HTML
        <div class="$args[colClass]">
            <img src="assets/img/coach/$imgName[$i].jpg" class="$args[imgClass]" alt="">
            <div class="$args[overlayClass]">
                <i class="$args[firstIconClass]">
                    <p class="$args[iconTextClass]">$firsticontext[$i]</p>
                </i>
                <i class="$args[secondIconClass]">
                    <p class="$args[iconTextClass]">$secondiconText[$i]</p>
                </i>
            </div>
        </div>
        HTML;
    }
}

function getWantedFile(){
    $url = explode('/', $_SERVER["SCRIPT_NAME"]);
    $file = end($url);
    return $file;
}

function writeClasses(){
    $class ="";
    $url = getWantedFile();
    if ($url == "contact.php"){
        $class = "header-contact";
    }
    elseif ($url == "fonctionnal-training.php"){
        $class = "header-presentation";
    }
    return $class;
}

function isActionSet(){
    if(isset($_GET['action']) && !empty($_GET['action'])){
        return true;
    }else {
        return false;
    }
}

function getAction(){
    return $action = $_GET['action'];
}