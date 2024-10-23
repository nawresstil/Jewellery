    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.php" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 ">SHINEINHERE</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto">
                    <div class=" nav-item nav-link">
                    <form class="d-flex" method="GET" action="prods.php"> <!-- Update action to point to prods.php -->
                        <button class="btns btn-outline-dark border-0" type="button" id="searchButton">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </button>
                        <div id="searchBox" class="input-group d-none">
                            <input type="text" class="form-control border-0" name="search" placeholder="Search" aria-label="Search" aria-describedby="basic-addon2">
                            <button class="btns btn-outline-secondary" type="button" id="closeSearchButton">
                                <i class="fa fa-times"></i>
                            </button>
                        </div>
                    </form>

                    </div>
                    <a href="index.php" class="nav-item nav-link active">New In</a>
                    <a href="prods.php?type=watches" class="nav-item nav-link">watches</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Jewelry</a>
                        <div class="dropdown-menu fade-down m-0">
                            <a href="prods.php?type=necklaces" class="dropdown-item">necklaces</a>
                            <a href="prods.php?type=" class="dropdown-item">Earrings</a>
                            <a href="prods.php?type=bracelets" class="dropdown-item">Bracelets</a>
                            <a href="prods.php?type=rings" class="dropdown-item">Rings</a>
                            <a href="prods.php?type=" class="dropdown-item">Brooches</a>
                            <a href="prods.php?type=" class="dropdown-item">Sets</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Accessories</a>
                        <div class="dropdown-menu fade-down m-0">
                            <a href="team.html" class="dropdown-item">Handbags</a>
                            <a href="testimonial.html" class="dropdown-item">Body Jewelry</a>
                            <a href="404.html" class="dropdown-item">Smartphone cases</a>
                        </div>
                    </div>
                    
                    <!-- Shopping cart icon -->
             </div>
             <div class="icon-cart">
                <div class="shopping-cart" data-product-count="0" id="cartIcon">
                    <span class="cart-icon">&#128722;</span>
                </div>
            </div>
             <a class="px-lg-3"></a>
             <a class="px-lg-3"></a>
             <a class="px-lg-3"></a>
             <a class="px-lg-3"></a>
        </div>
    </nav>
   
    <div class="container">
        <div class="listProduct">

        </div>
    </div>
    <div class="cartTab">
        <h1>Shopping Cart</h1>
        <div class="listCart">
        <?php include 'shopping_cart.php'; ?>
        </div>
        <div class="btn">
            <button class="close">CLOSE</button>
            <button class="checkOut"><a href="checkout.php">Check Out</a></button>
        </div>
    </div>
    
    <!-- Navbar End -->


 <!-- Cart Sidebar -->
<div id="cartSidebar" class="cart-sidebar">
    <div class="cart-content">
        <!-- Cart items will be displayed here -->

        
    </div>
</div>