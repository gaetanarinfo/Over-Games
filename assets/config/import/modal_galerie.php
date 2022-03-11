<div class="modal fade bd-example-modal-lg" id="galerieModal" tabindex="-1" role="dialog"
    aria-labelledby="ModalLabelGalerie" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <p class="modal-title" id="ModalLabelAvatar"></p>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <div id="carouselGalerie" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                    <?php if(!empty($article_result['image1'])) { ?>
                        <li data-target="#carouselGalerie" data-slide-to="0" class="active"></li>
                    <?php } if(!empty($article_result['image2'])) { ?>
                        <li data-target="#carouselGalerie" data-slide-to="1"></li>
                    <?php } if(!empty($article_result['image3'])) { ?>  
                        <li data-target="#carouselGalerie" data-slide-to="2"></li>
                    <?php } ?>
                    </ol>
                    <div class="carousel-inner">
                    <?php if(!empty($article_result['image1'])) { ?>
                        <div class="carousel-item active">
                        <img class="d-block w-100" src="<?php echo $article_result['image1'] ?>">
                        </div>
                    <?php } if(!empty($article_result['image2'])) { ?>
                        <div class="carousel-item">
                        <img class="d-block w-100" src="<?php echo $article_result['image2'] ?>" alt="Second slide">
                        </div>
                    <?php } if(!empty($article_result['image3'])) { ?>  
                        <div class="carousel-item">
                        <img class="d-block w-100" src="<?php echo $article_result['image3'] ?>" alt="Third slide">
                        </div>
                    <?php } ?>
                    </div>
                    <a class="carousel-control-prev" href="#carouselGalerie" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselGalerie" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
        </div>

            <div class="modal-footer marg-1">
                <div class="col-md-12" id="carouselGalerie">
                    
                </div>
            </div>
        </div>
    </div>
</div>