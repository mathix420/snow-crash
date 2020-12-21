#!/usr/bin/php
<?php
    function y($m)
    {
        $m = preg_replace("/\./", " x ", $m); # remplace les "." par des " x "
        $m = preg_replace("/@/", " y", $m); # remplace les "@" par des " y"
        return $m;
    }
    function x($y, $z)
    {
        $a = file_get_contents($y); # lis le contenu du fichier $y
        $a = preg_replace("/(\[x (.*)\])/e", "y(\"\\2\")", $a); # remplace "[x .*]" par 'y("\2")'
        $a = preg_replace("/\[/", "(", $a); # remplace [ par (
        $a = preg_replace("/\]/", ")", $a); # remplace ] par )
        return $a;
    }
    $r = x($argv[1], $argv[2]); # arg 1 et arg 2
    print $r;
?>
