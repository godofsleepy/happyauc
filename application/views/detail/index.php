<!-- detail -->
<?php foreach ($items as $item) { ?>
    <div style="background: none; margin-top: 3.5rem;" class="jumbotron mb-5">
        <div class="card mb-3" style="max-width: 1600px;height: 395px;">
            <div class="row no-gutters">
                <div class="col-md-8">
                    <img style="border: 3px solid red; height: 394px" src="<?php echo site_url('/uploads/' . $item->image) ?>" class="card-img img-fluid" alt="...">
                </div>
                <div class="col-md-4">
                    <div style="overflow-y: auto; height:353px;" class="card-body">
                        <div class="media">
                            <img src="<?php echo site_url('/asset/img/person.svg') ?>" width="22" class="mr-3" alt="...">
                            <div class="media-body">
                                <p class="mt-0"><?php echo $item->user ?></p>

                                <h5 class="card-title"><?php echo $item->name ?></h5>
                                <p class="card-text">
                                    <?php echo $item->description ?>
                                </p>
                                <p class="card-text m-0"><small class="text-muted">Start bid:</small> $ <?php echo $item->start_bid ?></p>
                                <p class="card-text"><small class="text-muted">Close date: <?php echo $item->close_date ?></small>
                                </p>
                            </div>
                        </div>
                        <br>
                        <?php $i = 1; ?>
                        <?php foreach ($bids as $bid) { ?>
                            <div class="media">
                                <img src="<?php echo site_url('/asset/img/person.svg') ?>" width=" 22" class="mr-3" alt="...">
                                <div class="media-body">

                                    <p class="m-0"><?php echo $bid->name ?></p>
                                    <?php if ($i == 1) { ?>
                                        <p class="p-0 text-danger text-right h5">$ <?php echo $bid->bid ?></p>
                                    <?php } else { ?>
                                        <p class="p-0  text-right h5">$ <?php echo $bid->bid ?></p>
                                    <?php } ?>
                                </div>
                            </div>

                        <?php $i++;
                        } ?>
                    </div>

                    <div style="outline: 1px solid rgba(0,0,0,.125)" class="input-group mb-0">

                        <div style="background: none;" class="input-group-prepend">
                            <span style="background: none; border: none;" class="input-group-text" id="basic-addon1">$</span>
                        </div>
                        <!-- <input type="hidden" id="iduser" name="iduser" value="<?php echo $id_user ?>"> -->
                        <input id="bid-price" name="bid_price" style="border: none;background-color: transparent;" type="number" style="outline: none;" class="form-control" placeholder="Bid now" aria-label="Bid" aria-describedby="button-bid">
                        <div class="input-group-append">
                            <button class="btn text-success" type="button" id="button-bid" data-urlitem="<?php echo site_url('detail/bid/' . $id_item) ?>"><i>Bid</i></button>
                        </div>
                        <!-- <form class="form-inline" action="<?php echo site_url('detail/bid/' . $id_item) ?>" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                               
                            </div>
                        </form> -->

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>


<!-- Related Content -->
<div style="margin-top: 100px;background: none;" class="jumbotron">
    <p class="h2">Related Auction</p>
    <br>
    <div class="card-columns">
        <div class="card">
            <img src="<?php echo site_url('asset/img/rwb.png') ?>" class="card-img" alt="...">
            <div style="background: rgba(0, 0, 0, 0.5);" class="card-img-overlay">
                <p class="h1 card-title text-danger text-center">$ 1.500.000</p>
            </div>
        </div>
        <div class="card">
            <img src="<?php echo site_url('asset/img/rwb.png') ?>" class="card-img" alt="...">
            <div style="background: rgba(0, 0, 0, 0.5);" class="card-img-overlay">
                <p class="h1 card-title text-danger text-center">$ 1.500.000</p>
            </div>
        </div>
        <div class="card">
            <img src="<?php echo site_url('asset/img/rwb.png') ?>" class="card-img" alt="...">
            <div style="background: rgba(0, 0, 0, 0.5);" class="card-img-overlay">
                <p class="h1 card-title text-danger text-center">$ 1.500.000</p>
            </div>
        </div>
        <div class="card">
            <img src="<?php echo site_url('asset/img/rwb.png') ?>" class="card-img" alt="...">
            <div style="background: rgba(0, 0, 0, 0.5);" class="card-img-overlay">
                <p class="h1 card-title text-danger text-center">$ 1.500.000</p>
            </div>
        </div>
        <div class="card">
            <img src="<?php echo site_url('asset/img/rwb.png') ?>" class="card-img" alt="...">
            <div style="background: rgba(0, 0, 0, 0.5);" class="card-img-overlay">
                <p class="h1 card-title text-danger text-center">$ 1.500.000</p>
            </div>
        </div>
        <div class="card">
            <img src="<?php echo site_url('asset/img/rwb.png') ?>" class="card-img" alt="...">
            <div style="background: rgba(0, 0, 0, 0.5);" class="card-img-overlay">
                <p class="h1 card-title text-danger text-center">$ 1.500.000</p>
            </div>
        </div>
    </div>


</div>