{{include 'head.tpl'}}
<body class="ishome">
    <header class="header">
        {include 'top_menu.tpl'}
        {include 'carousel.tpl' }
    </header>
    <section class="products" id="products">
        {include 'products.tpl'}
    </section>

    <section class="orders" id="orders">
        {include 'instruction.tpl'}
    </section>

    <section class="about" id="about">
        {include 'about_us.tpl'}
    </section>

    <section class="contacts" id="contacts">
        {include 'contacts.tpl'}
    </section>

    <section class="benefits">
        {include 'benefits.tpl'}
    </section>
</body>

{{include 'footer.tpl'}}