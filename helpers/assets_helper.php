<?php
  function image($file){

    return base_url('assets/Images/'.$file.'.png');
  }

  function css($file){

    return base_url('assets/CSS/'.$file.'.css');
  }

  function js($file){

    return base_url('assets/JS/'.$file.'.js');
  }

  function pdf($file){

    return base_url('assets/PDF/'.$file.'.pdf');
  }
?>
