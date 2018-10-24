<div class="tz-gallery">
    {foreach from=$images item=row}
        <div class="row mb-3">
            {foreach from=$row item=image}
                <div class="col-md-4">
                    <div class="card">
                        <a class="lightbox" href="{$config.templates_dir}/{$image.location}">
                            <img src="{$config.templates_dir}/{$image.location_mini}" alt="{$image.alt}" title="{$image.name_photo}" class="card-img-top">
                        </a>
                    </div>
                </div>
            {/foreach}
        </div>
    {/foreach}
</div>
