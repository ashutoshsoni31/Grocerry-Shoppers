        <link rel="stylesheet" href="http://localhost/Grocerry/css/bootstrap.min.css">
        <link rel="stylesheet" href="http://localhost/Grocerry/css/MyStyle.css">


<header>
    <div class="row TopHead">
    <div class="col-md-1 col-sm-12"></div>
        <div class="col-md-3 col-sm-12">
            <a href="index.php">
                <img src="img/logo.png" id="img-logo" height="50">
                <span class="Logo">Shoppers Delight</span></a>
        </div>
        <div class="col-md-4  col-sm-12">
                <input class="form-control" placeholder="Serach" style="margin-top: 10px;">
            </div>
            <div class="col-md-1 col-sm-12"></div>
            <div class="col-md-1 col-sm-12 ">
            <a href="#">
             <button class="btn btn-secondry">Log In</button>     
            </a>
                </div>
                <div class=" col-md-1 col-sm-12">
                    <img src="img/cart.png" class="CartLog"  onclick="openNav()" alt="" height="32">
            <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="btn" onclick="closeNav()">&times;</a>
                <div class="row">
                    <div class="col-md-12 col-sm-12" aria-labelledby="exampleModalLabel">
                        <h5 class="modal-title" id="exampleModalLabel">Cart Items</h5>
                        <img src="img/ban5.jpg" height="250" alt="">
                    </div>
                </div><br>
                <div class="row Items" id="cart">
                    <div class="col-sm-4">
                        <img src="" alt="" id="ItemImg" height="50" width="50">
                    </div>
                    <div class="col-sm-4">
                        <span id="title"></span>
                    </div>
                    <div class="col-sm-4">
                        <div class="Quantity">
                            <span class="Minus" style="font-size:20px;padding:10px">-</span>
                            <span class="Num">1</span>
                            <span class="Plus" style="font-size:15px">+</span>
                            <img src="img/trash.png" height="20" style="margin-right:1px;" alt="">
                        </div>                       
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-1 col-sm-12 "></div>
    </div>
    <!-- <br> -->
<div class="container-fluid">
    <nav>
        <div class="row Main-Menu">
            <div class="col-md-12 col-sm-12">
                <div class="Menus">
                   <a href="Shoplist.php">Snacks</a>
                   <a href="Shoplist.php">Vegetables</a>
                   <a href="Shoplist.php">Fruiits</a>
                   <a href="Shoplist.php">Dry Fruits</a>
                   <a href="Shoplist.php">Winter Creams</a>
                   <a href="Shoplist.php">Cleaning</a>
                   <a href="Shoplist.php">Home Essentetials</a>
                   <a href="Shoplist.php">Gardning</a>
                   <a href="Shoplist.php">Soft drinks</a>
                   <a href="Shoplist.php">Masale</a>
                   <a href="Shoplist.php">Dry Fruits</a>
                   <a href="Shoplist.php">Dry Fruits</a>
                   <a href="Shoplist.php">Dry Fruits</a>
                </div>
            </div>
        </div>
    </nav>
</div>
</header>