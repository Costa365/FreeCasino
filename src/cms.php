<?php
declare(strict_types=1);

class cms {  
  public static function readContent($content){
    $json = file_get_contents("content//games.json");
    return json_decode($json,true);
  }

  public static function getLinkBySlug($slug){
    $ct = cms::readContent('sites');
    $i = array_search($slug, array_column($ct, 'slug'));
    $element = ($i !== false ? $ct[$i] : null);
    return $element['link'];
  }
}
?>
