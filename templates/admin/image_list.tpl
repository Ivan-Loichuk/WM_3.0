<div class="tz-gallery">
    {foreach from=$images item=row}
        <div class="row mb-3">
            {foreach from=$row item=image}
                <div class="col-md-4 js-image-block{$image.id}" data-id="{$image.id}">
                    <div class="card">
                        <a class="lightbox" href="{$config.templates_dir}/{$image.location}">
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
