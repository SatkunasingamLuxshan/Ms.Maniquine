<?php
include('header.php');
?>
   <title>Index Page</title>
<style>
    .slideshow {
        display: none;
    }

    <?php include 'Style.css' ?>
</style>





<div>
    <!--Div for slideshow-->
    <img class="slideshow" src="../img/cover15.AVIF" style="width:100%; height: 100vh;">
    <img class="slideshow" src="../img/cover13.AVIF" style="width:100%; height: 100vh;">
    <img class="slideshow" src="../img/cover12.AVIF" style="width:100%; height: 100vh;">
</div>

<script>
    //Script for slideshow
    var myIndex = 0;
    carousel();

    function carousel() {
        var i;
        var x = document.getElementsByClassName("slideshow");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        myIndex++;
        if (myIndex > x.length) {
            myIndex = 1
        }
        x[myIndex - 1].style.display = "block";
        setTimeout(carousel, 2000); // Change image every 2 seconds
    }
</script>


<?php
include('footer.php'); // for comman footer

?>