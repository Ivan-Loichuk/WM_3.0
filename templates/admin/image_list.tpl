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
            <br>
            {if isset($errors)}
                {if $errors == '0'}
                    <div class="alert alert-success" id="success-alert">
                        <strong>Success!</strong> {$lang.add_image_errors[1]}
                    </div>
                {else}
                    <div class="alert alert-danger" id="danger-alert">
                        <strong>Error!</strong> {$errors}
                    </div>
                {/if}
            {/if}
            <div class="row text-center pad-top">
                <div id="main">
                    <div class="tz-gallery">
                        {foreach from=$images item=row}
                            <div class="row mb-3">
                                {foreach from=$row item=image}
                                    <div class="col-md-4 js-image-block{$image.id}" data-id="{$image.id}">
                                        <div class="card">
                                            <a class="lightbox" href="{$config.templates_dir}/{$image.location_resize}">
                                                <img src="{$config.templates_dir}/{$image.location_mini}" alt="{$image.alt}" title="{$image.name_photo}" class="card-img-top">
                                            </a>
                                            <div class="overlay"></div>
                                            <div class="delete"><a data-id="{$image.id}"><i class="fas fa-trash-alt"></i></a></div>
                                        </div>
                                    </div>
                                {/foreach}
                            </div>
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
                <h5 class="modal-title" id="exampleModalLongTitle">Add image options</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="admin.php?p=addImage" method="POST" id="add-image-form" enctype="multipart/form-data">
                    <div class="form-row container">
                        <div class="row">
                            <div class="col-sm" style="padding-left: 0px;">
                                <label for="image_file">Select image</label>
                                <input type="file" name="file" class="ed form-control-file" id="image_file">
                            </div>
                            <div class="col-sm" style="padding-left: 0px;">
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
                    <input type="submit" name="submit" style="display: none;">
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary js-submit" name="submit">Додати</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="alertModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Alert</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Do you really want to delete this image?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                <button type="button" class="btn btn-primary js-modal-yes">Yes</button>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {

        $('.js-submit').on('click', function () {
           $('#add-image-form input[type=submit]').trigger('click');
        });
        $('.tz-gallery').find('.delete a').each(function() {
            $(this).on('click', function () {
                $('#alertModal').modal('show');
                $('.js-modal-yes').data("id", $(this).data("id"));
            });
        });
        $('.js-modal-yes').on('click', function () {
            var id = $(this).data("id");
            $.ajax({
                url:    	'admin.php?p=delete_image_async',
                type:		'POST',
                cache: 		false,
                data: {
                    'id': id
                },
                dataType:	'html',
                beforeSend: function () {

                },
                success: function(error) {
                    if(error == 0){
                        $('#alertModal').modal('hide');
                        $('.js-image-block' + id + '').html("");
                    }else{
                        alert("Upps...Server error");
                    }

                }
            });
        });

    });

</script>
