
<form action="public/pages/prosesContact.php" method="post">

 <!-- Contact -->
 <div class="row article p-3 m-auto">
          <section class="contact" id="contact">
            <div class="container">
              <div class="row">
                <div class="col-sm-12 text-center judulkontak">
                  <h2>Contact</h2>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-12">
                  <form>
                    <div class="form-group">
                      <label for="name">Nama</label>
                      <input
                      name="nama"
                        type="text"
                        id="name"
                        class="form-control"
                        placeholder="masukan nama anda"
                      />
                    </div>
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input
                      name="email"
                        type="email"
                        id="email"
                        class="form-control"
                        placeholder="masukan email anda"
                      />
                    </div>
                    <div class="form-group">
                      <label for="telp">Nomor HP</label>
                      <input
                      name="telp"
                        type="telp"
                        id="telp"
                        class="form-control"
                        placeholder="masukan nomor telepon anda"
                      />
                    </div>

                    <div class="form-group">
                      <label for="telp">Alamat</label>
                      <input
                      name="alamat"
                        type="alamat"
                        id="alamat"
                        class="form-control"
                        placeholder="masukan nomor alamat anda"
                      />
                    </div>
              
                    <div class="form-group">
                      <label for="message">Pesan</label>
                      <textarea name="pesan" class="form-control" rows="3"></textarea>
                    </div>
                    <button name="submit" type="submit" class="btn btn-primary mt-3">
                      Kirimkan
                    </button>
                  </form>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>
      <!-- end Contact -->

</form>