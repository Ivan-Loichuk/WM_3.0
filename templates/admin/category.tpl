<div id="wrapper">
    <div id="page-wrapper" >
        <div id="page-inner">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Категорії</h2>
                </div>
            </div>
            <!-- /. ROW  -->
            <hr />
            <div class="row">
                <div class="col-lg-12 ">
                    <div class="alert alert-info">
                        <strong>Welcome Ivan ! </strong> You Have No pending Task For Today.
                    </div>
                </div>
            </div>
            <div class="row text-center pad-top">
                <div id="main">
                    <ul class="category_list">
                        {foreach from=$category key=k item=cat}
                            <li data-id="{$cat}">{$k}</li>
                        {/foreach}
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>