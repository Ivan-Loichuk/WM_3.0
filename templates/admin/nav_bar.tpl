<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="adjust-nav">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
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
                        <a href="admin.php?p={$k}" data-id="{$cat}" class="list-group-item {if $smarty.get.p == {$k}}active{/if}">{$k}</a>
                    {/foreach}
                </div>
            </li>
        </ul>
    </div>
</nav>
