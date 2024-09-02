<link rel="stylesheet" href="<?php $_SERVER['DOCUMENT_ROOT']?>/ext/search.css">
<script type="module" src="<?php $_SERVER['DOCUMENT_ROOT']?>/ext/search.js" defer></script>

<!-- Search Section -->
<span class="property_search">
    <input onfocus="this.style.outline = 'none'" type="text" placeholder="search for properties">
    <img class="search_icon" src="<?php $_SERVER['DOCUMENT_ROOT']?>/stf/img/searchIcon.svg" alt="search icon">
    

    <div class="sr_instance">
        <section id="filter">
            <img class="filter_icon" src="<?php $_SERVER['DOCUMENT_ROOT']?>/stf/img/filter.svg" alt="fi">
            <img class="cancelIcon" src="<?php $_SERVER['DOCUMENT_ROOT']?>/stf/img/cancelIcon.svg" alt="cancel icon">

            <div class="filter_box">
                <p>Filter Search</p>
                <div class="filter">
                    <p><label for="state">State:</label>
                    <select id="state">
                        <option value="" selected></option>
                        <option value="lagos">Lagos</option>
                        <option value="oyo">Oyo</option>
                        <option value="abuja">Abuja</option>
                        <option value="ogun">Ogun</option>
                        <option value="kwara">Kwara</option>
                        <option value="osun">Osun</option>
                    </select></p>

                    <p><label for="sort">Sort by:</label>
                    <select id="sort">
                        <option value="none" selected></option>
                        <option value="rent">Rent</option>
                        <option value="sale">Sale</option>
                    </select></p>

                    <p><label for="sort">Order by:</label>
                    <select id="sort">
                        <option value="none" selected></option>
                        <option value="ascd">Ascending</option>
                        <option value="desc">Descending</option>
                    </select></p>

                </div>
            </div>
        </section>
    </div>
</span>

