<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="adjust-nav">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">
                <img src="assets/img/logo.png" />
            </a>
        </div>

        <span class="logout-spn" >
            <a href="#" style="color:#fff;">LOGOUT</a>
        </span>
    </div>
</div>

<!-- /. NAV TOP  -->
<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
            <li class="active-link">
                <a href="index.html" ><i class="fa fa-desktop "></i>Категорії</a>
                <ul class="category_list">
                    {foreach from=$category key=k item=cat}
                        <li data-id="{$cat}">{$k}</li>
                    {/foreach}
                </ul>
            </li>
        </ul>
    </div>
</nav>

<script type="text/javascript">
    $(document).ready(function() {
        $('.category_list').find('li').each(function() {
            $(this).on('click', function () {
                $(this).data("id");

                $.ajax({
                    url:    	'admin.php?p=getImagesAsync',
                    type:		'POST',
                    cache: 		false,
                    data: {
                        'id': $(this).data("id")
                    },
                    dataType:	'html',
                    beforeSend: function () {

                    },
                    success: function(data) {
                        $('#main').html(data);
                    }
                });
            });
        });
    });
</script>