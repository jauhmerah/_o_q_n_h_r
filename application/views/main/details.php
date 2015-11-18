<?php foreach ($produk as $data): ?>

<!--<div class="col-lg-4 col-md-4 col-sm-4">
  <div class="images">
    <a href="" class="img-responsive"><img src="/sjpro/asset/user/img/produk<?php echo $data['gambar'];?>"></a>
  </div>
</div>-->

<div class="col-lg-8 col-md-4 col-sm-4">

  <h3><?php echo $data['arr']?></h3>
  <div class="price-detail">Harga <span class="price-detail-color"><?php echo $data['arr']?></span></div>

  <!--<span class="label label-success"><?php echo $data['status_produk']?></span>
  <div class="well well-lg">
    <form action="" class="form-horizontal">

      <div class="form-group">
        <label class="col-lg-2 control-label">Jumlah</label>
        <div class="col-lg-3">
          <input type="number" step="1" min="1" name="quantity" value="1" class="form-control" size="2">
        </div>
        <button type="button" class="btn btn-success btn-lg pull-right" data-toggle="modal" data-target="#modal-beli">BELI</button>
      </div>

    </form>
  </div>-->