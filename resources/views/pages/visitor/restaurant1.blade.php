<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Poppins Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap"
        rel="stylesheet"
    >

    <!-- Font Awesome -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    >

    <!-- Website CSS -->
    <link rel="stylesheet" href="{{ asset('css/stylefood1.css') }}">

    <title>McDonald's Restaurant</title>
</head>

<body>


<!-- ========================================================= -->
<!-- NAVBAR -->
<!-- ========================================================= -->

<header class="navbar">

    <!-- LOGO -->

   <a href="#" class="logo">

    <img
        src="{{ asset('images/food/logo.png') }}"
        alt="Foodpanda"
    >

</a>


    <!-- ADDRESS -->

    <button class="address-selector" onclick="openAddress()">

        <i class="fa-solid fa-location-dot"></i>

        <div>

            <small>Deliver to</small>

            <strong>Select your address</strong>

        </div>

        <i class="fa-solid fa-chevron-down"></i>

    </button>


    <!-- NAV RIGHT -->

    <div class="navbar-right">

        <button class="language-button">

            <i class="fa-solid fa-globe"></i>

            EN

            <i class="fa-solid fa-chevron-down"></i>

        </button>


        <button class="login-button">

            Log in

        </button>


        <button class="signup-button">

            Sign up

        </button>


        <!-- PROFILE -->

        <div class="profile-container">

            <button
                class="profile-button"
                onclick="toggleProfile()"
            >

                <i class="fa-regular fa-user"></i>

            </button>


            <div
                id="profileDropdown"
                class="profile-dropdown"
            >

                <div class="profile-header">

                    <div class="profile-avatar">

                        <i class="fa-solid fa-user"></i>

                    </div>

                    <div>

                        <strong>Guest User</strong>

                        <small>Welcome!</small>

                    </div>

                </div>


                <hr>


                <a href="#">

                    <i class="fa-regular fa-user"></i>

                    Profile

                </a>


                <a href="#">

                    <i class="fa-solid fa-gear"></i>

                    Settings

                </a>


                <a href="#">

                    <i class="fa-solid fa-receipt"></i>

                    Orders

                </a>


                <hr>


                <a href="#" class="logout">

                    <i class="fa-solid fa-right-from-bracket"></i>

                    Log out

                </a>

            </div>

        </div>


        <!-- CART ICON -->

        <button
            class="navbar-cart"
            onclick="scrollToCart()"
        >

            <i class="fa-solid fa-bag-shopping"></i>

            <span id="cartCount">
                0
            </span>

        </button>

    </div>

</header>



<!-- ========================================================= -->
<!-- BREADCRUMB -->
<!-- ========================================================= -->

<div class="breadcrumb">

    <a href="#">
        Home
    </a>

    <i class="fa-solid fa-chevron-right"></i>

    <a href="#">
        Kuala Lumpur
    </a>

    <i class="fa-solid fa-chevron-right"></i>

    <span>
        McDonald's
    </span>

</div>



<!-- ========================================================= -->
<!-- RESTAURANT HEADER -->
<!-- ========================================================= -->

<section class="restaurant-header">

    <div class="restaurant-cover">

        <img
            src="{{ asset('images/food/restaurant.jpg') }}"
            alt="Restaurant"
        >

    </div>


    <div class="restaurant-content">

        <div class="restaurant-title-row">

            <div>

                <div class="restaurant-tags">

                    <span>
                        Burgers
                    </span>

                    <span>
                        Fast Food
                    </span>

                    <span>
                        Chicken
                    </span>

                    <span>
                        Halal
                    </span>

                </div>


                <h1>
                    McDonald's (Jalan Tun Perak)
                </h1>


                <p class="restaurant-subtitle">

                    1010101 • Fast Food • Burgers

                </p>

            </div>


            <!-- FAVOURITE -->

             <button
                class="favorite-button"
                onclick="toggleFavourite(this)"
            >

                <i class="fa-regular fa-heart"></i>

                <span>
                    Add to favourites
                </span>

            </button>
        </div>


        <!-- RESTAURANT INFORMATION -->

        <div class="restaurant-information">

    <!-- RATING -->

    <div class="rating">

        <i class="fa-solid fa-star"></i>

        <strong>
            5/5
        </strong>

        <span>
            (10000+)
        </span>

    </div>


    <!-- REVIEWS -->

    <button
        class="reviews-button"
        onclick="openReviews()"
    >

        See reviews

    </button>


    <!-- DIVIDER -->

    <span class="divider">
        |
    </span>


    <!-- MORE INFO -->

    <button class="more-info">

        <i class="fa-solid fa-circle-info"></i>

        More info

    </button>

</div>

    </div>

</section>



<!-- ========================================================= -->
<!-- DEALS -->
<!-- ========================================================= -->

<section class="deals-section">

    <div class="section-heading">

        <h2>
            Available deals
        </h2>

        <a href="#">
            See all
        </a>

    </div>


    <div class="deal-list">


        <!-- DEAL 1 -->

        <div class="deal-card">

            <div class="deal-image">

                <i class="fa-solid fa-ticket"></i>

            </div>

            <div class="deal-content">

                <strong>
                    Free delivery
                </strong>

                <p>
                    Get free delivery on your first order.
                </p>

                <small>
                    T&C apply
                </small>

            </div>

            <button class="deal-button">
                View
            </button>

        </div>


        <!-- DEAL 2 -->

        <div class="deal-card">

            <div class="deal-image">

                <i class="fa-solid fa-percent"></i>

            </div>

            <div class="deal-content">

                <strong>
                    App-only deals
                </strong>

                <p>
                    Save more with exclusive promotions.
                </p>

                <small>
                    Limited time
                </small>

            </div>

            <button class="deal-button">
                View
            </button>

        </div>


        <!-- DEAL 3 -->

        <div class="deal-card">

            <div class="deal-image">

                <i class="fa-solid fa-tags"></i>

            </div>

            <div class="deal-content">

                <strong>
                    Special offers
                </strong>

                <p>
                    Enjoy selected meals at special prices.
                </p>

                <small>
                    T&C apply
                </small>

            </div>

            <button class="deal-button">
                View
            </button>

        </div>

    </div>

</section>



<!-- ========================================================= -->
<!-- MENU NAVIGATION -->
<!-- ========================================================= -->

<div class="menu-navigation">

    <div class="menu-search">

        <i class="fa-solid fa-magnifying-glass"></i>

        <input
            type="text"
            id="menuSearch"
            placeholder="Search in menu"
            onkeyup="searchMenu()"
        >

    </div>


    <div class="menu-categories">

        <a
            href="#popular"
            class="category active"
        >
            Popular
        </a>

        <a
            href="#promotions"
            class="category"
        >
            Promotions
        </a>

        <a
            href="#burgers"
            class="category"
        >
            Burgers
        </a>

        <a
            href="#chicken"
            class="category"
        >
            Ayam Goreng & Ayam Tenders
        </a>

        <a
            href="#rice"
            class="category"
        >
            Nasi & Bubur
        </a>

        <a
            href="#mcnuggets"
            class="category"
        >
            McNuggets
        </a>

        <a
            href="#drinks"
            class="category"
        >
            Drinks
        </a>

    </div>

</div>



<!-- ========================================================= -->
<!-- MAIN -->
<!-- ========================================================= -->

<main class="main-layout">


<!-- ========================================================= -->
<!-- MENU -->
<!-- ========================================================= -->

<div class="menu-content">


    <!-- POPULAR -->

    <section
        id="popular"
        class="menu-section"
    >

        <h2>
            Popular
        </h2>

        <p class="section-subtitle">
            Most ordered right now.
        </p>


        <div class="food-grid">


            <!-- FOOD 1 -->

            <div class="food-card">

                <div class="food-image">

                    <img
                        src="{{ asset('images/food/burger.png') }}"
                        alt="Spicy Chicken"
                    >

                </div>


                <div class="food-details">

                    <h3>
                        Spicy Chicken McDeluxe Medium McValue Meal
                    </h3>

                    <p class="food-description">

                        Delicious crispy chicken burger served with fries
                        and a refreshing drink.

                    </p>


                    <div class="food-bottom">

                        <strong>
                            RM 18.58
                        </strong>

                        <button
                            class="add-button"
                            onclick="addToCart(
                                'Spicy Chicken McDeluxe',
                                18.58
                            )"
                        >

                            <i class="fa-solid fa-plus"></i>

                        </button>

                    </div>

                </div>

            </div>



            <!-- FOOD 2 -->

            <div class="food-card">

                <div class="food-image">

                    <img
                        src="{{ asset('images/food/bigmac.png') }}"
                        alt="Double Cheeseburger"
                    >

                </div>


                <div class="food-details">

                    <h3>
                        Double Cheeseburger Medium McValue Meal
                    </h3>

                    <p class="food-description">

                        Two juicy beef patties with melted cheese,
                        fresh toppings and fries.

                    </p>


                    <div class="food-bottom">

                        <strong>
                            RM 17.36
                        </strong>

                        <button
                            class="add-button"
                            onclick="addToCart(
                                'Double Cheeseburger',
                                17.36
                            )"
                        >

                            <i class="fa-solid fa-plus"></i>

                        </button>

                    </div>

                </div>

            </div>



            <!-- FOOD 3 -->

            <div class="food-card">

                <div class="food-image">

                    <img
                        src="{{ asset('images/food/chicken.png') }}"
                        alt="Fried Chicken"
                    >

                </div>


                <div class="food-details">

                    <h3>
                        2pcs Ayam Goreng McD Spicy Medium McValue Meal
                    </h3>

                    <p class="food-description">

                        Crispy fried chicken with a spicy flavour,
                        fries and a drink.

                    </p>


                    <div class="food-bottom">

                        <strong>
                            RM 19.10
                        </strong>

                        <button
                            class="add-button"
                            onclick="addToCart(
                                '2pcs Ayam Goreng McD',
                                19.10
                            )"
                        >

                            <i class="fa-solid fa-plus"></i>

                        </button>

                    </div>

                </div>

            </div>

        </div>

    </section>



    <!-- ===================================================== -->
    <!-- PROMOTIONS -->
    <!-- ===================================================== -->

    <section
        id="promotions"
        class="menu-section"
    >

        <h2>
            Promotions
        </h2>

        <p class="section-subtitle">
            Great deals available now.
        </p>


        <div class="food-list">


            <!-- PROMO 1 -->

            <div class="food-list-card">

                <div class="list-food-info">

                    <span class="promo-label">
                        PROMOTION
                    </span>

                    <h3>
                        2pcs Ayam Goreng McD Mixed
                    </h3>

                    <p>
                        RM 15.28
                    </p>

                </div>


                <img
                    src="{{ asset('images/food/chicken.png') }}"
                    alt=""
                >


                <button
                    class="list-add-button"
                    onclick="addToCart(
                        '2pcs Ayam Goreng Mixed',
                        15.28
                    )"
                >

                    <i class="fa-solid fa-plus"></i>

                </button>

            </div>



            <!-- PROMO 2 -->

            <div class="food-list-card">

                <div class="list-food-info">

                    <span class="promo-label">
                        PROMOTION
                    </span>

                    <h3>
                        2pcs Ayam Goreng McD Mixed Medium McValue Meal
                    </h3>

                    <p>
                        RM 19.10
                    </p>

                </div>


                <img
                    src="{{ asset('images/food/chicken.png') }}"
                    alt=""
                >


                <button
                    class="list-add-button"
                    onclick="addToCart(
                        'Ayam Goreng Medium Meal',
                        19.10
                    )"
                >

                    <i class="fa-solid fa-plus"></i>

                </button>

            </div>



            <!-- PROMO 3 -->

            <div class="food-list-card">

                <div class="list-food-info">

                    <span class="promo-label">
                        PROMOTION
                    </span>

                    <h3>
                        2pcs Ayam Goreng McD Mixed Large McValue Meal
                    </h3>

                    <p>
                        RM 21.46
                    </p>

                </div>


                <img
                    src="{{ asset('images/food/chicken.png') }}"
                    alt=""
                >


                <button
                    class="list-add-button"
                    onclick="addToCart(
                        'Ayam Goreng Large Meal',
                        21.46
                    )"
                >

                    <i class="fa-solid fa-plus"></i>

                </button>

            </div>

        </div>

    </section>



    <!-- ===================================================== -->
    <!-- BURGERS -->
    <!-- ===================================================== -->

    <section
        id="burgers"
        class="menu-section"
    >

        <h2>
            Burgers
        </h2>

        <p class="section-subtitle">
            Delicious burgers made fresh.
        </p>


        <div class="food-grid">


            <div class="food-card">

                <div class="food-image">

                    <img
                        src="{{ asset('images/food/burger.png') }}"
                        alt=""
                    >

                </div>

                <div class="food-details">

                    <h3>
                        McChicken
                    </h3>

                    <p class="food-description">
                        Crispy chicken patty with lettuce and mayonnaise.
                    </p>


                    <div class="food-bottom">

                        <strong>
                            RM 10.90
                        </strong>

                        <button
                            class="add-button"
                            onclick="addToCart('McChicken', 10.90)"
                        >

                            <i class="fa-solid fa-plus"></i>

                        </button>

                    </div>

                </div>

            </div>



            <div class="food-card">

                <div class="food-image">

                    <img
                        src="{{ asset('images/food/bigmac.png') }}"
                        alt=""
                    >

                </div>

                <div class="food-details">

                    <h3>
                        Big Mac
                    </h3>

                    <p class="food-description">
                        Two beef patties with special sauce and cheese.
                    </p>


                    <div class="food-bottom">

                        <strong>
                            RM 12.90
                        </strong>

                        <button
                            class="add-button"
                            onclick="addToCart('Big Mac', 12.90)"
                        >

                            <i class="fa-solid fa-plus"></i>

                        </button>

                    </div>

                </div>

            </div>

        </div>

    </section>



    <!-- ===================================================== -->
    <!-- CHICKEN -->
    <!-- ===================================================== -->

    <section
        id="chicken"
        class="menu-section"
    >

        <h2>
            Ayam Goreng & Ayam Tenders
        </h2>

        <p class="section-subtitle">
            Crispy, juicy and delicious.
        </p>


        <div class="food-grid">

            <div class="food-card">

                <div class="food-image">

                    <img
                        src="{{ asset('images/food/chicken.png') }}"
                        alt=""
                    >

                </div>

                <div class="food-details">

                    <h3>
                        1pc Ayam Goreng McD
                    </h3>

                    <p class="food-description">
                        Crispy fried chicken with a spicy coating.
                    </p>


                    <div class="food-bottom">

                        <strong>
                            RM 9.90
                        </strong>

                        <button
                            class="add-button"
                            onclick="addToCart('1pc Ayam Goreng', 9.90)"
                        >

                            <i class="fa-solid fa-plus"></i>

                        </button>

                    </div>

                </div>

            </div>

        </div>

    </section>



    <!-- ===================================================== -->
    <!-- RICE -->
    <!-- ===================================================== -->

    <section
        id="rice"
        class="menu-section"
    >

        <h2>
            Nasi & Bubur
        </h2>

        <p class="section-subtitle">
            Local favourites.
        </p>


        <div class="food-grid">

            <div class="food-card">

                <div class="food-image">

                    <img
                        src="{{ asset('images/food/bubur.png') }}"
                        alt="Bubur"
                    >

                </div>

                <div class="food-details">

                    <h3>
                        Bubur Ayam McD
                    </h3>

                    <p class="food-description">
                        Warm rice porridge with chicken and spring onions.
                    </p>


                    <div class="food-bottom">

                        <strong>
                            RM 8.90
                        </strong>

                        <button
                            class="add-button"
                            onclick="addToCart('Bubur Ayam McD', 8.90)"
                        >

                            <i class="fa-solid fa-plus"></i>

                        </button>

                    </div>

                </div>

            </div>

        </div>

    </section>



    <!-- ===================================================== -->
    <!-- DRINKS -->
    <!-- ===================================================== -->

    <section
        id="drinks"
        class="menu-section"
    >

        <h2>
            Drinks
        </h2>

        <p class="section-subtitle">
            Refreshing drinks.
        </p>


        <div class="food-grid">

            <div class="food-card">

                <div class="food-image">

                    <img
                        src="{{ asset('images/food/drink.png') }}"
                        alt="Drink"
                    >

                </div>

                <div class="food-details">

                    <h3>
                        Coca-Cola Zero Sugar
                    </h3>

                    <p class="food-description">
                        Refreshing cold Coca-Cola Zero Sugar.
                    </p>


                    <div class="food-bottom">

                        <strong>
                            RM 5.50
                        </strong>

                        <button
                            class="add-button"
                            onclick="addToCart(
                                'Coca-Cola Zero Sugar',
                                5.50
                            )"
                        >

                            <i class="fa-solid fa-plus"></i>

                        </button>

                    </div>

                </div>

            </div>

        </div>

    </section>

</div>



<!-- ========================================================= -->
<!-- CART SIDEBAR -->
<!-- ========================================================= -->

<aside
    id="cart"
    class="cart-sidebar"
>

    <!-- CART TABS -->

    <div class="cart-tabs">

        <button class="cart-tab active">
            Delivery
        </button>

        <button class="cart-tab disabled">
            Pick-up

            <small>
                Not available
            </small>

        </button>

    </div>


    <!-- CART CONTENT -->

    <div
        id="cartItems"
        class="cart-items"
    >

        <div class="empty-cart">

            <div class="empty-cart-icon">

                <i class="fa-solid fa-bag-shopping"></i>

            </div>

            <h3>
                Your cart is empty
            </h3>

            <p>
                Add some delicious food to get started.
            </p>

        </div>

    </div>


    <!-- CART FOOTER -->

    <div class="cart-footer">

        <div class="free-delivery">

            <i class="fa-solid fa-truck"></i>

            <div>

                <strong>
                    Free delivery
                </strong>

                <small>
                    Add more items to unlock free delivery
                </small>

            </div>

        </div>


        <div class="cart-total">

            <span>
                Total
            </span>

            <strong id="cartTotal">
                RM 0.00
            </strong>

        </div>


        <small class="tax-note">
            Includes estimated taxes and fees
        </small>


        <button
            id="checkoutButton"
            class="checkout-button"
            disabled
        >

            Review payment and address

        </button>

    </div>

</aside>

</main>



<!-- ========================================================= -->
<!-- ADDRESS MODAL -->
<!-- ========================================================= -->

<div
    id="addressModal"
    class="modal"
>

    <div class="address-modal">

        <button
            class="modal-close"
            onclick="closeAddress()"
        >

            <i class="fa-solid fa-xmark"></i>

        </button>


        <div class="modal-icon">

            <i class="fa-solid fa-location-dot"></i>

        </div>


        <h2>
            What's your address?
        </h2>


        <p>
            Enter your delivery address so we can show you
            restaurants and delivery options available in your area.
        </p>


        <div class="address-input">

            <i class="fa-solid fa-location-dot"></i>

            <input
                type="text"
                placeholder="Enter your delivery address"
            >

        </div>


        <button class="confirm-address">

            Confirm address

        </button>


        <button
            class="cancel-address"
            onclick="closeAddress()"
        >

            Cancel

        </button>

    </div>

</div>

<!-- ========================================================= -->
<!-- REVIEWS MODAL -->
<!-- ========================================================= -->

<div
    id="reviewsModal"
    class="modal"
>

    <div class="reviews-modal">

        <button
            class="modal-close"
            onclick="closeReviews()"
        >

            <i class="fa-solid fa-xmark"></i>

        </button>


        <h2>
            Customer reviews
        </h2>


        <!-- OVERALL RATING -->

        <div class="overall-rating">

            <div class="big-rating">

                <strong>
                    5.0
                </strong>

                <div class="stars">

                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>

                </div>

                <span>
                    10,000+ ratings
                </span>

            </div>


            <!-- RATING BARS -->

            <div class="rating-bars">

                <div class="rating-row">

                    <span>5</span>

                    <i class="fa-solid fa-star"></i>

                    <div class="rating-bar">

                        <div style="width: 92%;"></div>

                    </div>

                    <span>92%</span>

                </div>


                <div class="rating-row">

                    <span>4</span>

                    <i class="fa-solid fa-star"></i>

                    <div class="rating-bar">

                        <div style="width: 6%;"></div>

                    </div>

                    <span>6%</span>

                </div>


                <div class="rating-row">

                    <span>3</span>

                    <i class="fa-solid fa-star"></i>

                    <div class="rating-bar">

                        <div style="width: 2%;"></div>

                    </div>

                    <span>2%</span>

                </div>


                <div class="rating-row">

                    <span>2</span>

                    <i class="fa-solid fa-star"></i>

                    <div class="rating-bar">

                        <div style="width: 0%;"></div>

                    </div>

                    <span>0%</span>

                </div>


                <div class="rating-row">

                    <span>1</span>

                    <i class="fa-solid fa-star"></i>

                    <div class="rating-bar">

                        <div style="width: 0%;"></div>

                    </div>

                    <span>0%</span>

                </div>

            </div>

        </div>


        <hr>


        <!-- REVIEW -->

        <div class="customer-review">

            <div class="review-user">

                <div class="review-avatar">

                    <i class="fa-solid fa-user"></i>

                </div>

                <div>

                    <strong>
                        Customer
                    </strong>

                    <small>
                        2 days ago
                    </small>

                </div>

            </div>


            <div class="review-stars">

                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>

            </div>


            <p>
                Food arrived quickly and everything was fresh.
                Very satisfied with the order!
            </p>

        </div>


        <div class="customer-review">

            <div class="review-user">

                <div class="review-avatar">

                    <i class="fa-solid fa-user"></i>

                </div>

                <div>

                    <strong>
                        Customer
                    </strong>

                    <small>
                        5 days ago
                    </small>

                </div>

            </div>


            <div class="review-stars">

                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>

            </div>


            <p>
                Good food and the delivery was fast.
                Will order again.
            </p>

        </div>

    </div>

</div>



<!-- ========================================================= -->
<!-- JAVASCRIPT -->
<!-- ========================================================= -->

<script>

let cart = [];

let cartTotal = 0;



/* ========================================================= */
/* PROFILE DROPDOWN */
/* ========================================================= */

function toggleProfile() {

    const dropdown =
        document.getElementById("profileDropdown");

    dropdown.classList.toggle("show");

}



/* ========================================================= */
/* CLOSE PROFILE WHEN CLICKING OUTSIDE */
/* ========================================================= */

document.addEventListener("click", function(event) {

    const profile =
        document.querySelector(".profile-container");

    const dropdown =
        document.getElementById("profileDropdown");

    if (!profile.contains(event.target)) {

        dropdown.classList.remove("show");

    }

});



/* ========================================================= */
/* FAVOURITE */
/* ========================================================= */

function toggleFavourite(button) {

    button.classList.toggle("liked");

    const icon =
        button.querySelector("i");

    if (button.classList.contains("liked")) {

        icon.classList.remove("fa-regular");

        icon.classList.add("fa-solid");

    } else {

        icon.classList.remove("fa-solid");

        icon.classList.add("fa-regular");

    }

}



/* ========================================================= */
/* ADDRESS MODAL */
/* ========================================================= */

function openAddress() {

    document
        .getElementById("addressModal")
        .classList.add("show");

}


function closeAddress() {

    document
        .getElementById("addressModal")
        .classList.remove("show");

}



/* ========================================================= */
/* ADD TO CART */
/* ========================================================= */

function addToCart(name, price) {

    cart.push({

        name: name,

        price: price

    });


    cartTotal += price;


    updateCart();

}



/* ========================================================= */
/* UPDATE CART */
/* ========================================================= */

function updateCart() {

    const cartItems =
        document.getElementById("cartItems");

    const cartCount =
        document.getElementById("cartCount");

    const total =
        document.getElementById("cartTotal");

    const checkout =
        document.getElementById("checkoutButton");


    cartCount.innerText = cart.length;


    total.innerText =
        "RM " + cartTotal.toFixed(2);


    if (cart.length === 0) {

        cartItems.innerHTML = `

            <div class="empty-cart">

                <div class="empty-cart-icon">

                    <i class="fa-solid fa-bag-shopping"></i>

                </div>

                <h3>
                    Your cart is empty
                </h3>

                <p>
                    Add some delicious food to get started.
                </p>

            </div>

        `;

        checkout.disabled = true;

        return;

    }


    checkout.disabled = false;


    let html = "";


    cart.forEach(function(item, index) {

        html += `

            <div class="cart-item">

                <div>

                    <strong>
                        ${item.name}
                    </strong>

                    <small>
                        1 × RM ${item.price.toFixed(2)}
                    </small>

                </div>


                <div class="cart-item-right">

                    <strong>
                        RM ${item.price.toFixed(2)}
                    </strong>

                    <button
                        onclick="removeFromCart(${index})"
                    >

                        <i class="fa-solid fa-trash"></i>

                    </button>

                </div>

            </div>

        `;

    });


    cartItems.innerHTML = html;

}



/* ========================================================= */
/* REMOVE FROM CART */
/* ========================================================= */

function removeFromCart(index) {

    cartTotal -= cart[index].price;

    cart.splice(index, 1);

    updateCart();

}



/* ========================================================= */
/* SCROLL TO CART */
/* ========================================================= */

function scrollToCart() {

    document
        .getElementById("cart")
        .scrollIntoView({

            behavior: "smooth",

            block: "center"

        });

}



/* ========================================================= */
/* SEARCH MENU */
/* ========================================================= */

function searchMenu() {

    const input =
        document
        .getElementById("menuSearch")
        .value
        .toLowerCase();


    const cards =
        document.querySelectorAll(".food-card, .food-list-card");


    cards.forEach(function(card) {

        const text =
            card.innerText.toLowerCase();


        if (text.includes(input)) {

            card.style.display = "";

        } else {

            card.style.display = "none";

        }

    });

}



/* ========================================================= */
/* CATEGORY ACTIVE STATE */
/* ========================================================= */

const categories =
    document.querySelectorAll(".category");


categories.forEach(function(category) {

    category.addEventListener("click", function() {

        categories.forEach(function(item) {

            item.classList.remove("active");

        });


        category.classList.add("active");

    });

});

/* ========================================================= */
/* REVIEWS */
/* ========================================================= */

function openReviews() {

    document
        .getElementById("reviewsModal")
        .classList.add("show");

}


function closeReviews() {

    document
        .getElementById("reviewsModal")
        .classList.remove("show");

}

</script>


</body>
</html>