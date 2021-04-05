<footer class="footer theBox" id="footer">
    <div class="container">
        <span class="text-muted">Jishan Hoshen © 2021</span>
    </div>
</footer>
</div>
<?php
class Foot {
  // Properties
  public $script_location;
  public $script_files;

  // Methods
  function set_property(
  	$script_location,
  	$script_files
  ) {
    $this->script_location = $script_location;
    $this->script_files = $script_files;
  }
  function get_property() {
  	for ($i=0; $i < sizeof($this->script_files); $i++) { 
echo '
	<script src="'.$this->script_location.'/'.$this->script_files[$i].'"></script>';
  	}
  }
}
function listJsFiles($dir, $filter = '', &$results = array()) {
    $files = scandir($dir);

    foreach($files as $key => $value){
        $path = $value; 

        if(!is_dir($path)) {
            if(empty($filter) || preg_match($filter, $path)) $results[] = $path;
        } elseif($value != "." && $value != ".." && $value %= "*.map") {
            getDirContents($path, $filter, $results);
        }
    }

    return $results;
}

//listJsFiles('./dream_shop/css');
$Foot = new Foot();
$Foot->set_property(
	"js", listJsFiles('js','/\.js$/')
);
$Foot->get_property();
?>
</body>