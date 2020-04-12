
<?php

// In the text file BannerQuotes.txt( present in banner folder), each line is a quote.
// Below code shows a random line (random quote) everytime

$file=fopen("banner/BannerQuotes.txt", "r");
$lines = file("banner/BannerQuotes.txt");
$randValue=rand(0,1);

//echo "$randValue";
//echo $lines[$randValue];
$quote = $lines[$randValue];
fclose($file)

?>
<!DOCTYPE html>
<html>
<h1><?php echo "$quote"; ?></h1>
<h2></h2>
<img id="img" src="images/banner/1.jpg" alt = "Banner Image"  width=100%>

</html>

<!-- Inline CSS for easy editing-->
<style>
img
{
	max-width: 100%;
	z-index: 1;
	position: relative;
}
h1,h2
{
	z-index: 2;
	position: absolute;
	color: white;
	font-size: 2.5em;
	top: 52%;
	left:10%;
	
	-webkit-text-size-adjust:80%;

}
h2
{
font-size: 2em;	!important;
}

</style>
<script language="javascript">
        function autoResizeDiv()
        {
            document.getElementById('img').style.height = window.innerHeight-220 +'px';
        }
        window.onresize = autoResizeDiv;
        autoResizeDiv();
    </script>