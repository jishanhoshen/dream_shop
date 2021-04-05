<?php
class Header {
  // Properties
  public $css_location;
  public $css_files;

  // Methods
  function set_property(
  	$css_location,
  	$css_files
  ) {
    $this->css_location = $css_location;
    $this->css_files = $css_files;
  }
  function get_property() {
    session_start();
  	echo "<head>";
  	for ($i=0; $i < sizeof($this->css_files); $i++) { 
echo '
    <link rel="stylesheet" href="'.$this->css_location.'/'.$this->css_files[$i].'"/>';
  	}
  	echo "
</head>
<body>
";
include 'preload.php';
echo '<div class="mainContainer">';
  }
}
function listFolderFiles($dir, $filter = '', &$results = array()) {
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

//listFolderFiles('./dream_shop/css');
$head = new Header();
$head->set_property(
	"css", listFolderFiles('css','/\.css$/')
);
$head->get_property();
?>
