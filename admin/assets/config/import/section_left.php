<!-- Section right -->

<div class="col-md-3 col-border-left">

    <div class="card-profil">
        <div class="m-auto text-center">
                <img src="https://gaetan-seigneur.store/upload/avatar/<?php echo $membre_result_co['avatar']; ?>" alt="<?php echo $membre_result_co['pseudo']; ?>" width="117" class="rounded-circle mt-4 img-admin">
        </div>

        <div class="text-center mt-3">
            <p><i class="fas fa-user-cog ml-1" aria-hidden="true"></i><?php echo $membre_result_co['nom']; ?> <?php echo $membre_result_co['prenom']; ?></p>
            <p><i class="fas fa-random ml-1" aria-hidden="true"></i><?php echo $membre_result_co['rang']; ?></p>
            <p><i class="fas fa-sign-out-alt ml-1" aria-hidden="true"></i>Inscrit le <?php echo $membre_result_co['date_creation']; ?></p>
            
            <?php if($nbMail != "0") { ?>
                <p><a id="btn_message" class="btn-message" href="#" data-toggle="modal" data-target="#messageModal"><i class="fas fa-envelope ml-1"></i> Message <span class="badge badge-info mr-1"><?php echo $nbMail ?></span></a></p>
            <?php }else{ ?>
                <p><i class="fas fa-envelope ml-1"></i> Message <span class="badge badge-info mr-1"><?php echo $nbMail ?></span></p>
            <?php } ?>    
        </div>

        <hr class="mt-1">

        <div class="text-center mt-1">
            <p>Gestion du site internet</p>
            <p><i class="fas fa-users ml-1"></i> Membre inscrit <span class="badge badge-success mr-1"><?php echo $nbMembre ?></span></p>
            <p><i class="fas fa-newspaper ml-1"></i> Actualité en ligne <span class="badge badge-success mr-1"><?php echo $nbNews ?></span></p>
            <p><i class="fab fa-youtube ml-1"></i> Vidéo en ligne <span class="badge badge-success mr-1"><?php echo $nbVideo ?></span></p>
            <p><i class="fas fa-eye ml-1"></i> Visiteur(s) <span class="badge badge-success mr-1"><?php echo $nbVisite ?></span></p>
        </div>

        <hr class="mt-1">

        <div class="text-center mt-1">
            <p>Administration du site internet</p>
            <a href="" class="btn btn-admin mb-2" data-toggle="modal" data-target="#addModal"><i class="fas fa-user-plus"></i> Ajouter un membre</a>
            <a href="" class="btn btn-admin mb-2" data-toggle="modal" data-target="#addNews"><i class="fas fa-plus"></i> Ajouter une actualité</a>
            <a href="" class="btn btn-admin mb-2" data-toggle="modal" data-target="#addTuto"><i class="fas fa-plus"></i> Ajouter un tutoriel</a>
            <a href="" class="btn btn-admin mb-2" data-toggle="modal" data-target="#addTest"><i class="fas fa-plus"></i> Ajouter un test</a>
            <a href="" class="btn btn-admin" data-toggle="modal" data-target="#addVideo"><i class="fas fa-plus"></i> Ajouter une vidéo</a>
        </div>
    </div>

</div>