<section class="section">
    <div class="row mb-2">
        <div class="col-12 justify-content-end d-flex">
            <button class="btn btn-primary icon icon-left" data-toggle="modal" data-target="#modal"><i class="fa fab fa-plus"></i> Tambah</button>
        </div>
    </div>
    <div class="col-md-12">
        <div class="table-responsive">
            <table class="table table-sm table-striped table-bordered mt-2">
                <thead>
                    <tr class="text-center">
                        <th scope="col">No</th>
                        <th scope="col">Kode Kategori</th>
                        <th scope="col">Nama Kategori</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;

                    foreach ($data as $value) :
                    ?>
                        <tr>
                            <th scope="row" class="text-center"><?= $i++ ?></th>
                            <td><?= $value['kode'] ?></td>
                            <td><?= $value['nama'] ?></td>
                            <td class="text-center">
                                <div class="d-inline justify-content-center">
                                    <button class="btn btn-success icon icon-left" onclick=showModal(<?= json_encode($value) ?>)><i class="fa fab fa-edit"></i> edit</button>
                                    <button class="btn btn-danger icon icon-left" onclick=deleteData()><i class="fa fab fa-trash"></i> delete</button>
                                </div>
                            </td>
                        </tr>

                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

</section>