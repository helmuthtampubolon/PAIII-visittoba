<?php $__env->startSection('content'); ?>
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Kalender Event</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Kalender Event</a></li>
                        <li class="breadcrumb-item active">Blank Page</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>


    <!-- Main content -->
    <section class="content">
        <div class="card card-solid">
            <div class="card-body pb-0">
                <div class="row d-flex align-items-stretch">
                    <?php $__currentLoopData = $kalender; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kalenders): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                            <div class="card bg-light">
                                <div class="card-header text-muted border-bottom-0">
                                    <?php echo e($kalenders->nama_event); ?>

                                </div>
                                <div class="card-body pt-0">
                                    <div class="row">
                                        <div class="col-7">
                                            <h2 class="lead"><b>Lokasi</b></h2>
                                            <p class="text-muted text-sm"><b> Deskripsi</b>
                                                <?php echo substr(strip_tags(str_replace(PHP_EOL, '<br>', $kalenders->deskripsi_event), '<br>'), 0, 300);?>
                                                <a href="<?php echo e(route('detail-admin',$kalenders->id_kalenderevent)); ?>"> baca
                                                    selengkapnya...</a>
                                            </p>
                                            <ul class="ml-4 mb-0 fa-ul text-muted">
                                                <li class="small"><span class="fa-li"><i class="fa fa-map-marker "></i></span> <?php echo e($kalenders->nama_tempat); ?>

                                                </li>
                                                <li class="small"><span class="fa-li"><i
                                                            class="fa fa-calendar"></i></span> <?php echo e($kalenders->tanggal_event); ?>

                                                </li>
                                                <li class="small"><span class="fa-li"><i
                                                            class="fa fa-clock"></i></span> <?php echo e($kalenders->jam_event); ?>

                                                </li>
                                                <li class="small"><span class="fa-li"><i
                                                            class="fa fa-location-arrow"></i></span> <?php echo e($kalenders->alamat_event); ?>

                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-5 text-center">
                                            <img src="<?php echo e(asset('storage/img/kalender/'.$kalenders->gambar_event)); ?>"
                                                 alt="" class="img-circle img-fluid">
                                        </div>
                                    </div>
                                </div>
                                    <div class="card-footer">
                                        <div class="text-right">
                                            <a href="<?php echo e(url('/adm/updatekalender',$kalenders->id_kalenderevent)); ?>"
                                               class="btn btn-sm bg-warning">
                                                <i class="fas fa-edit"></i> Update
                                            </a>

                                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                                    data-target="#delete_<?php echo e($kalenders->id_kalenderevent); ?>">
                                                <i class="fas fa-trash-alt">
                                                </i>
                                                Hapus
                                            </button>
                                            <div class="modal fade" id="delete_<?php echo e($kalenders->id_kalenderevent); ?>" tabindex="-1" role="dialog"
                                                 aria-labelledby="deleteModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="hapusModalLongTitle">Hapus Kalender Event</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body text-left">
                                                            Anda Yakin Ingin Menghapus Kalender Event ...
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">
                                                                Batal
                                                            </button>
                                                            <form action="<?php echo e(route('delete-eventkalender',$kalenders->id_kalenderevent)); ?>"
                                                                  method="post">
                                                                <?php echo csrf_field(); ?>
                                                                <?php echo method_field('DELETE'); ?>
                                                            <button type="submit"
                                                               class="btn btn-danger btn-sm">
                                                                <i class="fa fa-trash-alt"> </i> Hapus
                                                            </button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                            </div>
                        </div>



                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>
            </div>

            <!-- /.card-body -->
            <div class="card-footer">
                <nav aria-label="Contacts Page Navigation">
                    <ul class="pagination justify-content-center m-0">
                                                <?php echo $kalender->links(); ?>

                    </ul>
                </nav>
            </div>
            <!-- /.card-footer -->
        </div>
        <!-- /.card -->

    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u476964821/domains/visit-toba.id/PA-III-02-2020/resources/views/admin/kalender/eventkalender.blade.php ENDPATH**/ ?>