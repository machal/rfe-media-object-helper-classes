<?php
/*
Generates code for icon
*/
function icon($image, $text) {
  return '
    <span class="icon icon--top-left">
      <img class="icon__img" src="dist/img/'.$image.'" alt="'.$text.'">
    </span>
  ';
}

/*
Generates code for list item
*/
function list_item(
  // Params for all variants
  $image, $label, $title,
  // Params for with icon:
  $iconImage = null, $iconText = null,
  // Param for vertical variant:
  $isVertical = false
  ) {
  $isWithIcon = ($iconImage != null);
  return '
  <div class="list-item d-flex '.(($isVertical) ? 'list-item--vertical flex-column' : 'flex-row').'">
    <p class="list-item__image mb-0 '.(($isVertical) ? '' : 'w-35 mr-2').'">
      <a href="#" class="d-block '.(($isWithIcon) ? 'position-relative' : '').'">
        <img src="'.$image.'" alt="Image" class="img-fluid">
        '.(($isWithIcon) ? icon($iconImage, $iconText) : '').'
      </a>
    </p>
    <div class="list-item__text '.(($isVertical) ? '' : 'w-65').'">
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
