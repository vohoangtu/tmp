<?php
namespace NN;
use ScssPhp\ScssPhp\Compiler;
class Scss
{
    function __construct($isScssconverted = false)
    {
        $this->toCss($isScssconverted);
    }

    public function toCss($isScssconverted = false)
    {
        if($isScssconverted){

            global $compiler;

            $compiler = new Compiler();

            $compine_css = "assets/css/app.min.css";

            $source_scss = "assets/scss/style.scss";

            $scssContents = file_get_contents($source_scss);

            $import_path = "assets/scss";
            $compiler->addImportPath($import_path);
            $target_css = $compine_css;

            $cssCompiled = $compiler->compileString($scssContents)->getCss();

            if (!empty($cssCompiled) && is_string($cssCompiled)) {
                file_put_contents($target_css, $cssCompiled);
            }
        }
    }
}
