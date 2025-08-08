<?php
// Check if running from browser
if (php_sapi_name() !== 'cli') {
    // Get from URL: ?type=controller&name=Product
    $type = isset($_GET['type']) ? strtolower($_GET['type']) : null;
    $name = isset($_GET['name']) ? $_GET['name'] : null;
} else {
    global $argc, $argv;
    if ($argc < 3) {
        echo "Usage: php make.php controller|model|view Name\n";
        exit;
    }
    $type = strtolower($argv[1]);
    $name = $argv[2];
}

if (!$type || !$name) {
    echo "Missing type or name!\n";
    exit;
}

switch ($type) {
    case 'controller':
        $content = "<?php\n"
            . "defined('BASEPATH') OR exit('No direct script access allowed');\n\n"
            . "class $name extends CI_Controller {\n"
            . "    public function __construct(){\n"
            . "        parent::__construct();\n"
            . "    }\n\n"
            . "    public function index(){\n"
            . "        // code here\n"
            . "    }\n"
            . "}\n";
        $path = "application/controllers/{$name}.php";
        break;

    case 'model':
        $content = "<?php\n"
            . "defined('BASEPATH') OR exit('No direct script access allowed');\n\n"
            . "class {$name}_model extends CI_Model {\n"
            . "    public function __construct(){\n"
            . "        parent::__construct();\n"
            . "    }\n"
            . "}\n";
        $path = "application/models/{$name}_model.php";
        break;

    case 'view':
        $content = "<h1>$name View</h1>\n";
        $path = "application/views/{$name}.php";
        // auto-create folder if not exists
        $folder = dirname($path);
        if (!is_dir($folder)) {
            mkdir($folder, 0777, true);
        }
        break;

    default:
        echo "Unknown type: $type\n";
        exit;
}

if (file_put_contents($path, $content) !== false) {
    echo "Created: $path\n";
} else {
    echo "Failed to create: $path\n";
}
