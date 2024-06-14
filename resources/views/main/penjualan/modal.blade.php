<!-- modal tambah produk -->
<div class="modal fade" tabindex="-1" role="dialog" id="modalTambahPenjualan">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Penjualan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            {{-- <form id="formTambahPenjualan" action="{{ route('proses.tambah.penjualan') }}" method="post"> --}}
            <div class="modal-body">
                <form id="formTambahPenjualan" method="post">
                    {{-- @csrf --}}
                    <div class="form-group">
                        <label for="company">Produk</label>
                        <div class="input-group">
                            <select name="produk[]" class="form-control mr-2" id="txtProduk">
                                <option value="none">--- Pilih Produk ---</option>
                                <?php foreach ($dataProduk as $produk): ?>
                                <option value="<?= $produk->kd_produk ?>" data-kode-produk="<?= $produk->kd_produk ?>">
                                    <?= $produk->nama_produk ?></option>
                                <?php endforeach; ?>
                            </select>
                            <div class="input-group-append">
                                <input name="jumlah[]" type="number" class="form-control" id="txtqtProduk"
                                    placeholder="Jumlah" style="width: 90px;">
                            </div>
                        </div>
                    </div>
                    <div id="additionalForms">
                        <!-- Tempat untuk menambahkan form tambahan -->
                    </div>
                    <div class="form-group">
                        <button type="button" class="btn btn-success" onclick="tambahForm()">Tambah Item</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-primary" onclick="prosesTambahPenjualan()">Tambah
                    Penjualan</button>
                {{-- <button type="submit" class="btn btn-primary">Proses Tambah Penjualan</button> --}}
                <button type="button" class="btn btn-warning" data-dismiss="modal">Tutup</button>
            </div>
            {{-- </form> --}}
        </div>
    </div>
</div>
