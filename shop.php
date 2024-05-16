    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/shop.css">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <title>Shop Now</title>
    </head>
    <body style="background-image: linear-gradient(#97f8b8,#407448); height: 100%">
    <header>
        <nav class="navbar">
            <div class="logo-container">
            <img src="https://static.vecteezy.com/system/resources/previews/002/136/049/original/leaf-logo-organic-label-eco-icon-isolated-background-free-vector.jpg" alt="Logo" class="logo">
            <span class="website-name">OrgoProducts</span>
            </div>
            <ul class="nav-links">
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="logout.php">Logout</a></li> 
            </ul>
            <?php
            session_start();
            if (isset($_SESSION['username'])) {
                // Display username if logged in
                echo '<span class="username">Welcome, ' . $_SESSION['username'] . '</span>';
            }
        ?>
            <a href="cart.php" class="cart-icon"><i class="fas fa-shopping-cart"></i></a>
            </nav>
    </header>

    <main class="container">
        <section class="product-cards">
        <div class="card">
            <img src="https://th.bing.com/th?id=OPAC.2pV7e0KE2JLXSA474C474&w=220&h=220&c=17&o=5&pid=21.1" alt="Product 1" class="product-image">
            <div class="product-info">
            <h3 class="product-name">PureNaturals - Amla Powder</h3>
            <span class="product-price">455/-</span><br>
            <span class="product-category">Natural Powders</span>
            <a href="add_to_cart.php?product_id=1" class="add-to-cart-btn"><button>Add to Cart</button></a>
            </div>
        </div>
        <div class="card">
            <img src="https://th.bing.com/th?id=OPAC.b97bkKLdpsEstQ474C474&w=220&h=220&c=17&o=5&pid=21.1" alt="Product 2" class="product-image">
            <div class="product-info">
            <h3 class="product-name">Hibiscus Powder</h3>
            <span class="product-price">224/-</span><br>
            <span class="product-category">Natural Powders</span>
            <a href="add_to_cart.php?product_id=2" class="add-to-cart-btn"><button>Add to Cart</button></a>
            </div>
        </div>
        <div class="card">
            <img src="https://th.bing.com/th?id=OPAC.B6bdybVXuYVudA474C474&w=220&h=220&c=17&o=5&pid=21.1" alt="Product 2" class="product-image">
            <div class="product-info">
            <h3 class="product-name">Turmeric Powder</h3>
            <span class="product-price">400/-</span><br>
            <span class="product-category">Natural Powders</span>
            <a href="add_to_cart.php?product_id=3" class="add-to-cart-btn"><button>Add to Cart</button></a>
            </div>
        </div>
        <div class="card">
            <img src="https://th.bing.com/th?id=OPAC.WqAEybARttTjgQ474C474&w=220&h=220&c=17&o=5&pid=21.1" alt="Product 2" class="product-image">
            <div class="product-info">
            <h3 class="product-name">Sun screen</h3>
            <span class="product-price">600/-</span><br>
            <span class="product-category">Body Care</span>
            <a href="add_to_cart.php?product_id=4" class="add-to-cart-btn"><button>Add to Cart</button></a>
            </div>
        </div>
        <div class="card">
            <img src="https://th.bing.com/th?id=OPAC.%2fZxKbcsOzdXazw474C474&w=220&h=220&c=17&o=5&pid=21.1" alt="Product 2" class="product-image">
            <div class="product-info">
            <h3 class="product-name">Hair Conditioner</h3>
            <span class="product-price">300/-</span><br>
            <span class="product-category">Body Care</span>
            <a href="add_to_cart.php?product_id=5" class="add-to-cart-btn"><button>Add to Cart</button></a>
            </div>
        </div>
        <div class="card">
            <img src="https://th.bing.com/th?id=OPAC.RROz1aw58xs64A474C474&w=220&h=220&c=17&o=5&pid=21.1" alt="Product 2" class="product-image">
            <div class="product-info">
            <h3 class="product-name">Face Oil</h3>
            <span class="product-price">300/-</span><br>
            <span class="product-category">Body Care</span>
            <a href="add_to_cart.php?product_id=6" class="add-to-cart-btn"><button>Add to Cart</button></a>
            </div>
        </div>
        <div class="card">
            <img src="https://th.bing.com/th?id=OPAC.9wP%2b%2b1BGZj2q%2fw474C474&w=220&h=220&c=17&o=5&pid=21.1" alt="Product 2" class="product-image">
            <div class="product-info">
            <h3 class="product-name">Face Wash</h3>
            <span class="product-price">150/-</span><br>
            <span class="product-category">Body Care</span>
            <a href="add_to_cart.php?product_id=7" class="add-to-cart-btn"><button>Add to Cart</button></a>
            </div>
        </div>
        <div class="card">
            <img src="https://th.bing.com/th?id=OPAC.aDwqvPuQ%2b5ASzw474C474&w=220&h=220&c=17&o=5&pid=21.1" alt="Product 2" class="product-image">
            <div class="product-info">
            <h3 class="product-name">Millet Grains</h3>
            <span class="product-price">150/-</span><br>
            <span class="product-category">Seeds</span>
            <a href="add_to_cart.php?product_id=8" class="add-to-cart-btn"><button>Add to Cart</button></a>
            </div>
        </div>
        <div class="card">
            <img src="https://th.bing.com/th?id=OPAC.q56yow6T%2fYw0oA474C474&w=220&h=220&c=17&o=5&pid=21.1" alt="Product 2" class="product-image">
            <div class="product-info">
            <h3 class="product-name">Oganic Gel Color</h3>
            <span class="product-price">1000/-</span><br>
            <span class="product-category">Body Care</span>
            <a href="add_to_cart.php?product_id=9" class="add-to-cart-btn"><button>Add to Cart</button></a>
            </div>
        </div>
        <div class="card">
            <img src="https://th.bing.com/th?id=OPAC.CLIp9rxLctP1Hw474C474&w=220&h=220&c=17&o=5&pid=21.1" alt="Product 2" class="product-image">
            <div class="product-info">
            <h3 class="product-name">Hair Comb</h3>
            <span class="product-price">150/-</span><br>
            <span class="product-category">Equipments</span>
            <a href="add_to_cart.php?product_id=10" class="add-to-cart-btn"><button>Add to Cart</button></a>
            </div>
        </div>
        <div class="card">
            <img src="https://th.bing.com/th?id=OPAC.1xwOzeENyW8CBw474C474&w=220&h=220&c=17&o=5&pid=21.1" alt="Product 2" class="product-image">
            <div class="product-info">
            <h3 class="product-name">Men Deo</h3>
            <span class="product-price">200/-</span><br>
            <span class="product-category">Body Care</span>
            <a href="add_to_cart.php?product_id=11" class="add-to-cart-btn"><button>Add to Cart</button></a>
            </div>
        </div>
        <div class="card">
            <img src="https://th.bing.com/th?id=OPAC.0ob1w8kHcQQ3xQ474C474&w=220&h=220&c=17&o=5&pid=21.1" alt="Product 2" class="product-image">
            <div class="product-info">
            <h3 class="product-name">Dry Fruits</h3>
            <span class="product-price">750/-</span><br>
            <span class="product-category">Food Items</span>
            <a href="add_to_cart.php?product_id=12" class="add-to-cart-btn"><button>Add to Cart</button></a>
            </div>
        </div>
        <div class="card">
            <img src="https://th.bing.com/th?id=OPAC.NvgDTxyxo%2b7Zcg474C474&w=220&h=220&c=17&o=5&pid=21.1" alt="Product 2" class="product-image">
            <div class="product-info">
            <h3 class="product-name">Heena Powder</h3>
            <span class="product-price">500/-</span><br>
            <span class="product-category">Natural Powders</span>
            <a href="add_to_cart.php?product_id=13" class="add-to-cart-btn"><button>Add to Cart</button></a>
            </div>
        </div>
        <div class="card">
            <img src="https://th.bing.com/th?id=OPAC.9wP%2b%2b1BGZj2q%2fw474C474&w=220&h=220&c=17&o=5&pid=21.1" alt="Product 2" class="product-image">
            <div class="product-info">
            <h3 class="product-name">Acne Harvest</h3>
            <span class="product-price">150/-</span><br>
            <span class="product-category">Body Care</span>
            <a href="add_to_cart.php?product_id=14" class="add-to-cart-btn"><button>Add to Cart</button></a>
            </div>
        </div>
        <div class="card">
            <img src="https://th.bing.com/th?id=OPAC.KqwDsCdaLYRnxw474C474&w=220&h=220&c=17&o=5&pid=21.1" alt="Product 2" class="product-image">
            <div class="product-info">
            <h3 class="product-name">Aloevera Gel</h3>
            <span class="product-price">750/-</span><br>
            <span class="product-category">Body Care</span>
            <a href="add_to_cart.php?product_id=15" class="add-to-cart-btn"><button>Add to Cart</button></a>
            </div>
        </div>
        <div class="card">
            <img src="https://th.bing.com/th?id=OPAC.j7wdwIbZJMuY2Q474C474&w=220&h=220&c=17&o=5&pid=21.1" alt="Product 2" class="product-image">
            <div class="product-info">
            <h3 class="product-name">Avacado Oil</h3>
            <span class="product-price">850/-</span><br>
            <span class="product-category">Body Care</span>
            <a href="add_to_cart.php?product_id=16" class="add-to-cart-btn"><button>Add to Cart</button></a>
            </div>
        </div>
        <!-- Add more product cards here as needed -->
        </section>
    </main>
    </body>
    </html>
