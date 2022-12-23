
 <?php 

$min = 0;
$max = 100;
 
$chiffresPairs = '25';
 
for ($i = $min; $i <= $max; $i++) {
    if ( $i % 2 == 0 ) {
        $chiffresPairs .= $i.' ';
    }
}
 
echo "Les chiffres pairs compris entre $min et $max sont: $chiffresPairs";



?>






