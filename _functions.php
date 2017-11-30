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
  $isVertical = false,

  // Param for dark theme:
  $isDark = false,

  // Param for overlay variant:
  $isOverlay = false

  ) {

  // Icon variant form iconImage variable:
  $isWithIcon = ($iconImage != null);


  // If it is overlay variant, it is vertical too:
  if ($isOverlay) {
    $isVertical = true;
  }

  // HTML template
  // -------------

  // Wrapper:
  $html = '
    <div class="list-item d-flex mb-3 p-2
      '.(($isVertical) ? 'list-item--vertical flex-column' : 'flex-row').'
      '.(($isDark) ? 'bg-dark text-white' : '').'
      '.(($isOverlay) ? 'list-item--overlay position-relative' : '').'
      ">';

  // Image:
  $html .= '
    <p class="list-item__image mb-0 '.(($isVertical) ? '' : 'w-35 mr-2').'">
      <a href="#" class="d-block '.(($isWithIcon) ? 'position-relative' : '').'">
        <img src="'.$image.'" alt="Image" class="img-fluid">
        '.(($isWithIcon) ? icon($iconImage, $iconText) : '').'
      </a>
    </p>';

  // Text wrapper:
  $html .= '
    <div class="list-item__text '.(($isVertical) ? '' : 'w-65').'">';

  // Label:
  if (!$isOverlay):
    $html .= '
       <p class="list-item__label mb-0">
         <a class="label '.(($isDark) ? 'text-white' : '').'"
          href="#category-link-url">
          '.$label.'
          </a>
       </p>';
  endif;

  // Heading:
  $html .= '
     <h3 class="list-item__heading h6">
        <a href="#" class="'.(($isDark) ? 'text-white' : '').'">
         '.$title.'
        </a>
      </h3>';

  // Closing tags for text wrapper and main wrapper:
  $html .= '
    </div>
   </div>
  ';

  return $html;
}

?>
