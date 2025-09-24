<?php include 'components/header.php' ?>
<?php
include 'db.php';
$id = $_GET['id'];
$query = "SELECT * FROM product WHERE id=$id";
$result = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($result);
?>
<body>
    <div class="detail-headline">
        <h3>Gunung Bromo</h3>
    </div>
    <div class="detail-container">
            <img src="images/bromolandscape.jpg" alt="" width="48%" style="border-radius: 10px;">
            <form action="checkout.php">
            <input type="hidden" value="<?php echo $data['image'] ?>" name="image">
            <input type="hidden" value="<?php echo $data['name'] ?>" name="name">
            <input type="hidden" value="<?php echo $data['location'] ?>" name="location">
            <input type="hidden" value="<?php echo $data['price'] ?>" name="price">
        <div class="detail-card">
            <div class="card-headline">
                <h3>Gunung Bromo</h3>
                <div class="card-rating">
                    <h3>4.6</h3>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 24 24"><path fill="#faaa36" d="m5.825 21l1.625-7.025L2 9.25l7.2-.625L12 2l2.8 6.625l7.2.625l-5.45 4.725L18.175 21L12 17.275z"/></svg>
                </div>
            </div>
            <div class="card-review">
                <p>10 Ulasan</p>
            </div>
            <div class="keterangan">
            <p class="lokasi">Kabupaten Probolinggo, Jawa Timur</p>
            <p class="jam">Jam Operasional : 08:00 - 16:00</p>
            <label for="">Pilih Jumlah Tiket</label><br>
            <input type="number" name="quantity" value="1"><br>
            </div>
            <label class="method">Metode Pembayaran</label><br>
            <select name="method" id="" class="method-pay">
                <option value="Cash">Cash</option>
                <option value="Bank">Bank</option>
                <option value="E-Wallet">E - Wallet</option>
            </select><br><br>
            <label class="day">Pilih Hari</label><br>
            <select name="" id="" class="select-day">
                <option value="">27 Agustus</option>
                <option value="">28 Agustus</option>
                <option value="">29 Agustus</option>
            </select>
            <div class="price">
                <p>Mulai Dari</p>
                <h3>Rp. 120.000</h3>
            </div>
            <button class="pesan">Pesan Tiket</button>
            </form>
        </div>
    </div>
    <div class="deskripsi">
        <h3>Deskripsi</h3>
        <p>Gunung Bromo adalah salah satu gunung berapi aktif di Indonesia yang berada di Taman Nasional Bromo Tengger Semeru, Jawa Timur. Gunung ini memiliki ketinggian 2.329 meter di atas permukaan laut dan dikelilingi kaldera atau lautan pasir seluas 10 kilometer persegi. Gunung Bromo terkenal sebagai objek wisata utama di Jawa Timur dan menarik bagi para pengunjung karena statusnya sebagai gunung berapi yang masih aktif. </p>
    </div>

    <div class="review-section">
        <div class="review-container">
            <div class="review-headline">
                <div class="review-rating">
                <svg xmlns="http://www.w3.org/2000/svg" width="46px" height="46px" viewBox="0 0 24 24"><path fill="#faaa36" d="m5.825 21l1.625-7.025L2 9.25l7.2-.625L12 2l2.8 6.625l7.2.625l-5.45 4.725L18.175 21L12 17.275z"/></svg>
                <h2>4.6</h2>
                </div>
                <div class="review-total">
                <h4>Dari 12 Review</h4>
                <p>Oleh Pengguna Ngalam.in</p>
                </div>
            </div>
            <div class="review-box">
                <div class="review-profil">
                    <span class="profil"></span>
                    <h3 class="nama-komen">Aiman</h3>
                </div>
                
                <div class="review-comment">
                    <p>Bromo emang nggak pernah mengecewakan! Sunrise dari Penanjakan bikin speechless. Udara sejuk, pemandangan indah, dan jeep tour yang seru bikin liburan kali ini berkesan banget.</p>
                </div>
            </div>
        </div>
    </div>

    <?php include "components/footer.php" ?>
</body>