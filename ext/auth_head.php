<link rel="stylesheet" href="<?php $_SERVER['DOCUMENT_ROOT']?>/ext/head.css">
<script type="module" src="<?php $_SERVER['DOCUMENT_ROOT']?>/ext/head.js" defer></script>
<!-- Header Navigation Links -->
<div id="header">
    <a class="home" href="<?php $_SERVER['DOCUMENT_ROOT']?>/home.php"><img src="<?php $_SERVER['DOCUMENT_ROOT']?>/stf/img/doc_logo.svg" alt="Logo"></a>
    
    <p id="menu">
        <img class="menu" src="<?php $_SERVER['DOCUMENT_ROOT']?>/stf/img/menu.svg" alt="menu icon">
        <div class="menu_nav">
            <p>
                <span class="properties">
                    <a class="property" href="<?php $_SERVER['DOCUMENT_ROOT']?>/properties/properties.php">Properties</a> <img class="arrow_down" src="<?php $_SERVER['DOCUMENT_ROOT']?>/stf/img/plus.svg" alt="arrow down"> 
                        <span class="sub_property">
                            <a href="">Buy</a>
                            <a href="">Sell</a>
                            <a href="">Rent</a>
                        </span>
                </span>
            </p>
            <p>
                <span class="services">
                    <a class="service" href="<?php $_SERVER['DOCUMENT_ROOT']?>/services/services.php">Services</a> <img class="arrow_down" src="<?php $_SERVER['DOCUMENT_ROOT']?>/stf/img/plus.svg" alt="arrow down"> 
                        <span class="sub_service">
                            <a href="">Letting, Sales & Purchase</a>
                            <a href="">Property Management</a>
                            <a href="">Assets Valuation</a>
                            <a href="">Real Estate Consultancy</a>
                            <a href="">Facilities Management</a>
                            <a href="">Real Estate Brokerage</a>
                        </span>
                </span> 
            </p>
            <!-- <p><a class="about" href="<?php $_SERVER['DOCUMENT_ROOT']?>/about/about.php">About Us</a></p> -->
            <p><a class="contact" href="<?php $_SERVER['DOCUMENT_ROOT']?>/contact/contact.php">Contact</a></p>
        
            <span class="account">
                <span class="sign_up"><a href=""><p><?php echo 'Hi '. $email?></p></a></span>
                <span class="login"><a href="<?php $_SERVER['DOCUMENT_ROOT']?>/user/login.php"><p>Logout</p></a></span>
            </span>
        </div>
    </p>
</div>