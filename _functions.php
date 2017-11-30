<?php

function icon($image, $text) {
  return '
    <span class="icon icon--top-left">
      <img class="icon__img" src="dist/img/'.$image.'" alt="'.$text.'">
    </span>
  ';
}

function list_item(
  $image, $label, $title,
  $iconImage, $iconText
  ) {
  return '
  <div class="list-item d-flex flex-row">
    <p class="list-item__image w-35 mr-2">
      <a href="#" class="d-block position-relative">
        <img src="'.$image.'" alt="Image" class="img-fluid">
        '.(($iconImage != null) ? icon($iconImage, $iconText) : '').'
      </a>
    </p>
    <div class="list-item__text w-65">
     <p class="mb-0">
       <a class="label" href="#category-link-url">'.$label.'</a>
     </p>
     <h3 class="h6">
        <a href="#">
            '.$title.'
        </a>
      </h3>
    </div>
   </div>
  ';
}

?>
