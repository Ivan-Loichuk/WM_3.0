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
                    <!-- add image button -->
                    <button type="button" class="btn btn-primary add_image_btn" data-toggle="modal" data-target="#add-image-modal">
                        Додати фото
                    </button>
                </div>
            </div>
            <div class="row text-center pad-top">
                <div id="main">
                    <div class="list-group category_list">
                        {foreach from=$category key=k item=cat}
                            <a data-id="{$cat}" class="list-group-item">{$k}</a>
                        {/foreach}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="add-image-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Add image option</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-row">
                        <div class="col">
                            <label for="image_file">Select image</label>
                            <input type="file" name="file" class="ed form-control-file" id="image_file">
                        </div>
                        <div class="col">
                            <div class="form-check">
                                <label class="form-check-label" for="watermark" style="margin: 30px 15px 0px 0px;">
                                    Додати водяний знак
                                </label>
                                <input class="form-check-input" type="checkbox" value="" name="watermark" id="watermark" style="margin-top:40px;">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="image_name">Назва картинки</label>
                        <input type="text" class="form-control" id="image_name" name="name" placeholder="Назва картинки">
                    </div>
                    <div class="form-group">
                        <label for="image_alt">Альтернативний опис</label>
                        <input type="text" class="form-control" id="image_alt" name="alt" placeholder="Альтернативний опис">
                    </div>
                    <div class="form-group">
                        <label for="image_category">Додати до:</label>
                        <select class="form-control" id="image_category" name="img_category">
                            {foreach from=$category key=k item=cat}
                                <option value="{$cat}" {if $cat == 0}selected="selected"{/if}>{$k}</option>
                            {/foreach}
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="Submit">Додати</button>
            </div>
        </div>
    </div>
</div>
