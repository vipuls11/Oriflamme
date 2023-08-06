<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
</head>
<body>
<?php include("header.php") ?>
<!-- ...................Managed It Service ...................... -->
<div class="container mx-auto w-full relative opacity-80">
        <img src="img/White Grey Law Firm Clean Grids Law Firm Website.png" alt="" class="w-full">
        <div class="absolute top-80 left-5 lg:block hidden">
            <h1 class="text-5xl font-semibold text-white">PRODUCTS</h1>
            <div class="flex gap-4 px-4 items-center my-10 opacity-95 bg-slate-50 py-4 text-center text-xl font-semibold text-center justify-center">
                <h2><a href="index.php">Home</a></h2>
                <div class="bg-red-600 text-red-600 rounded-full w-1 px-1 py-1"></div>
                <h2><a href="aboutus.php">PRODUCTS</a></h2>
            </div>
        </div>
        <div class="absolute top-28 left-5  lg:hidden block">
            <h1 class="text-2xl font-semibold text-white">PRODUCTS</h1>
            <div class="flex gap-4 items-center px-4 my-5 opacity-95 bg-slate-50 py-4 text-center text-md font-semibold text-center justify-center">
                <h2><a href="">Home</a></h2>
                <div class="bg-red-600 text-red-600 rounded-full w-1 px-1 py-1"></div>
                <h2><a href="">PRODUCTS</a></h2>
            </div>
        </div>
    </div>
    <!-- ...................products banner...................... -->

    <div class="container mx-auto ">

                    <div class=" border py-2 px-4 mt-5">
                        <h2 class="text-xl font-semibold text-center">Desktop Computer And Personal Laptop</h2>
                        <h4 class="text-lg">We “<span class="text-sky-950">Oriflamme IT Solutions</span>” are Sole proprietorship based company, involved as the Wholesale Trader of Desktop Computer, Personal Laptop, Network Server and much more.</h4>
                    </div>
           

          
    <div class="flex">
            <!-- Brand List  -->
            <div class="my-20">
                <form action="" method="GET">
                    <div class="w-80">
                        <div class="flex justify-between border border-gray-200 py-4 px-4 bg-sky-950">
                            <h5 class="text-xl text-white">Filter</h5>
                            <button type="submit" class="text-sm px-2 py-1 bg-red-600 mr-2 text-white">Search</button>
                        </div>
                        <div class="py-4 bg-sky-950 px-4 text-white">
                            <h6 class="border-b border-b-gray-200 pb-2 ">Product List</h6>
                            <?php
                            $con = mysqli_connect("localhost","root","","oriflamme_it_solutions");
                            $brand_query = "SELECT * FROM a_brands";
                            $brand_query_run = mysqli_query($con, $brand_query);

                            if(mysqli_num_rows($brand_query_run) > 0)
                            {
                                foreach($brand_query_run as $brandlist)
                                {
                                    $checked = [];
                                    if(isset($_GET['brands']))
                                    {
                                        $checked = $_GET['brands'];
                                    } 
                            
                            ?>

                            <div>
                                <input type="checkbox" name="brands[]" class="my-5" value="<?= $brandlist['id'];?>"
                                <?php if (in_array($brandlist['id'], $checked)){echo "checked";}?>
                                />
                                <?= $brandlist['name']; ?>
                            </div>
                            <?php
                            }
                        }
                        else
                        {
                            echo "No Brands Found";
                        }
                            ?>
                        </div>
                    </div>
                </form>
            </div>
             

             <div class="my-20 grid gap-10 grid-cols-3 text-center px-10  w-full">
                <?php 
                if(isset($_GET['brands']))
                {
                    $brandchecked = [];
                    $brandchecked = $_GET['brands'];
                    foreach($brandchecked as $rowbrand) 
                    {
                        $products = "SELECT * FROM  a_products WHERE brand_Id IN ($rowbrand)";
                        $products_run = mysqli_query($con, $products);
                        if(mysqli_num_rows($products_run) > 0)
                        {
                            foreach($products_run as $productitems) :
                ?>
                <div class="text-center">
                <img src="<?= $productitems['image1'];?>" alt="">
                    <h6><?= $productitems['name'];?></h6>
                </div>
                <?php
                endforeach;
                    }
                    }
                }
                else
                {
                    $products = "SELECT * FROM a_products";
                    $products_run = mysqli_query($con, $products);
                    if(mysqli_num_rows($products_run)>0)
                    {
                        foreach($products_run as $productitems) :
                            ?>
                            <div class="text-center ">
                                <img src="<?= $productitems['image1'];?>" alt="" class="h-60 m-auto">
                                <h6><?= $productitems['name'];?></h6>
                            </div>
                            <?php
                            endforeach;
                    }
                    else
                    {
                        echo "No Items Found";
                    }
                }
                ?>
             </div>
             </div>
             </div>

<?php include("footer.php") ?>
</body>
</html>   