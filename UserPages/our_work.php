<?php
include('header.php');
?>
   <title>Our Works</title>
<style>
  <?php include 'Style.css' ?>
  .ta {

    background: rgba(101, 55, 226, 0.08) !important;


  }

  .ta {

    background: rgba(101, 55, 226, 0.01) !important;


  }

  img {
    border: 1px solid #ddd;
    border-radius: 4px;
    padding: 5px;

  }

  .shadow {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  }

  .image {
    opacity: 1;
    display: block;
    width: 100%;
    height: auto;
    transition: .5s ease;
    backface-visibility: hidden;
  }

  .middle {
    transition: .5s ease;
    opacity: 0;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%)
  }

  .container:hover .image {
    opacity: 0.3;
  }

  .container:hover .middle {
    opacity: 1;
  }



  .section {
    padding-top: 30px;
    padding-bottom: 30px;
  }

  .section-title {
    position: relative;
    margin-bottom: 30px;
    margin-top: 15px;
  }

  .section-title .title {
    display: inline-block;
    text-transform: uppercase;
    margin: 0px;
  }

  .section-title .section-nav {
    float: right;
  }

  .section-title .section-nav .section-tab-nav {
    display: inline-block;
  }

  .section-tab-nav li {
    display: inline-block;
    margin-right: 15px;
  }

  .section-tab-nav li:last-child {
    margin-right: 0px;
  }

  .section-tab-nav li a {
    font-weight: 700;
    color: #8D99AE;
  }

  .section-tab-nav li a:after {
    content: "";
    display: block;
    width: 0%;
    height: 2px;
    background-color: #D10024;
    -webkit-transition: 0.2s all;
    transition: 0.2s all;
  }

  .section-tab-nav li.active a {
    color: #D10024;
  }

  .section-tab-nav li a:hover:after,
  .section-tab-nav li a:focus:after,
  .section-tab-nav li.active a:after {
    width: 100%;
  }

  .section-title .section-nav .products-slick-nav {
    top: 0px;
    right: 0px;
  }

  .scrollbar {
    background-color: lightblue;

    height: 520px;
    overflow: auto;
  }

  a:hover {
    color: hotpink;
  }

  .col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

  @media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>






<!--Shop body part start-->
<?php

// $sql1="SELECT COUNT(*) 
// FROM products
// WHERE product_title ='iphone 5s'; ";
// $result1=mysqli_query($con,$sql1);

$sql = "SELECT * FROM products ORDER BY product_id";
$result = mysqli_query($con, $sql);

?>


<div class="col-md-12 col-sm-12 " style=" margin-top:10px;">


</div>
<caption >
                <h1 style="margin-top: 30px;  margin-left:550px">Our Works</h1>
            </caption>

<div class="container scrollbar" style=" margin-top:20px; background:rgba(200, 150, 222, -1)">

  <div class="row">

    <?php

    while ($row = mysqli_fetch_array($result)) {
      $pro_cat   = $row['product_title'];
      $pro_image = $row['filename'];

      $price = $row['product_price']; ?>
      
    
      <div class="col-lg-3 col-md-5 col-sm-6 ">


    

        <table>

          <tbody id="myTable">
            <tr>
              <td>

                <div class="card border shadow" style="width: 15rem; margin:10px; background:rgba(116, 127, 224, 0.45)">
                  <div class="card-header bg-transparent border"> <img src="../product_images/<?php echo  $pro_image; ?>" alt="" class="card-img-top" style=" height: 210px;"></div>
                  
                </div>
              </td>
            </tr>
          </tbody>
        </table>

      </div>
    <?php
    }
    ?>

  </div>


</div>

<script>
  $(document).ready(function() {
    $("#myInput").on("keyup", function() {
      var value = $(this).val().toLowerCase();
      $("#myTable tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
  });
</script>
<!--Shop body part end-->
<div style="margin-top: 30px;">
<?php
include('footer.php'); // for footer
?>
</div>