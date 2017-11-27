<?php  function list_item($image, $label, $title) {

return '
<div class="list-item d-flex flex-row">
  <p class="list-item__image w-35 mr-2">
    <a href="#"><img src="'.$image.'" alt="Image" class="img-fluid"></a>
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
