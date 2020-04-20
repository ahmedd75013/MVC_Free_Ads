<?php
function copier_images($path = "", $log = false)
{
    if ($path == "css_generator.php")
    {
        echo "le path doit etre precisé en dernier argument\n";
        return 0;
    }
    static $argv;
    static $a = 0;
    static $i = 0;
    static $name = [];
    static $position = [];
    static $longeurs = [];
    static $longtotale;
    static $hauteur = [];
    static $pathimage = [];
    static $marge = 0;
    static $nomim = "sprite";
    static $css = "sprite";
    static $hname = "index";
    
    $p = 0;
    $s = 0;
    $ii = 0;
    $h = 0;
    $help = 0;
    static $r = 0;
   
    if ($p == 1)
    {
        echo "pas d'argument apres [-p]\n";
    }
    if (is_dir($path) && $path != "/" && $path != "//")
    {
        if ($ptr = opendir($path))
        {
            while(($file = readdir($ptr)) != false)
            {
                if(file_exists($path. "/". $file) && mime_content_type($path. "/". $file) == "image/png")
                {
                    $name[] = $file;
                    $pathimage[] = $path."/".$file;
                    $size = getimagesize($path."/".$file);                            //   \
                    $longeurs[] = $size[0];                                           //    \
                    $longtotale+= $size[0];                                           //     \     Stock les hauteurs, longeurs et positions
                    $hauteur[] = $size[1];                                            //      }    de chaque image dans des tableaux et calcule
                    $position[0] = 0;                                                 //     /     la longueur totale de toutes les images
                    $position[$i+1] = $position[$i] + $longeurs[$i] + $marge;         //    /
                    $i++;                                                             //   /
                }
               
            }
        }
        closedir($ptr);
    }
    else
    {
        if ($help == 1)
        {
            echo "ET [$value] N'EST PAS UN DOSSIER !!!\n";
        }
        else
        {
            echo "$path n'est pas un dossier !!\n";
        }
        return 0;
    }
 
    
        if (count($pathimage))
        {
            $new = imagecreatetruecolor($longtotale + ($marge * (count($hauteur) -1)), max($hauteur));
            $noir = imagecolorallocate($new, 0, 0, 0);
            imagecolortransparent($new, $noir);
            while($a < count($pathimage))
            {
                $png = imagecreatefrompng($pathimage[$a]);
                imagecopy($new, $png, $position[$a],0, 0, 0, $longeurs[$a], $hauteur[$a]);
                $a++;
            }
            imagepng($new, "$nomim.png");
            $open = fopen("$hname.html", "w+");
            fwrite($open,
'<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            <title>Generator</title>
            <link href="'. $css. '.css" type="text/css" rel="stylesheet">
        </head>
        <body>
        ');
        $n = 0;
        while ($n < count($pathimage))
        {
            fwrite($open, '    <div id="'. substr($name[$n], 0, strrpos($name[$n], '.')). '"></div>
        ');
            $n++;
        }
        fwrite($open, '<body>
    <html>');


            $open = fopen("$css.css", "w+");
            $n = 0;
            while($n < count($pathimage))
            {
                fwrite($open, substr('#' . $name[$n], 0, strrpos($name[$n], '.')+1) . " {
float: left;
margin-right: $marge".'px'.";
background-image: url($nomim.png);".
"
background-position: ". -$position[$n]. "px 0px;".
"
width: " . $longeurs[$n] . "px;
height: " . $hauteur[$n] . "px;
}\n\n");
                $n++;
            }
        }
    }
     
    
    copier_images($argv[$argc - 1], true);