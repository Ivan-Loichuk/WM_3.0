<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="adjust-nav">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <span class="logout-spn" >
            <a href="admin.php?p=logout" style="color:#fff;">Logout</a>
        </span>
    </div>
</div>

<!-- /. NAV TOP  -->
<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
            <li class="active-link">
                <a href="index.html" ><i class="fa fa-desktop "></i>Категорії</a>
                <div class="list-group category_list">
                    {foreach from=$category key=k item=cat}
                        <a data-id="{$cat}" class="list-group-item">{$k}</a>
                    {/foreach}
                </div>
            </li>
        </ul>
    </div>
</nav>

<script type="text/javascript">
    $(document).ready(function() {
        $('.category_list').find('a').each(function() {
            $(this).on('click', function () {
                $(this).data("id");
                $('.category_list').find('a').each(function() {
                     if($(this).hasClass('active')){
                         $(this).removeClass('active');
                     }
                });
                $(this).addClass('active');
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