<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Utama.css">
    <title>KUTIKET.ID</title>
</head>

<header>
    <div class="Navigation">
        <div id="Kiri">
            <img src="image/logo2.jpg" alt="Yah Ilang">
            <h1>Kutiket</h1>
        </div>
        <div id="Kanan">
            <ul>
                <a href="#">Home</a>
                <a href="#">Berita</a>
                <a href="#">About</a>
            </ul>
        </div>
    </div>
</header>

<body>
<main>
    <div class="Sortir">
        <div id="Event">
          <input type="text" id="my-input" placeholder="Artis" />
        <div id="Eventlist1">
          <select name="Jenisevent" >
            <option value="0">----- Pilih Jenis Events -----</option>
            <option value="1">Fan-Meet</option>
            <option value="2">Konser</option>
            <option value="3">Festival</option>
            </select>
        </div>
        </div>
        <div id="Lokasi">
          <input type="text" id="my-input" placeholder="Lokasi" />
        </div>
        <div id="Tanggal">
          <input type="date" id="my-date" />
        </div>
        <div id="cari">
          <input type="text" id="my-date" placeholder="Cari">
        </div>
    </div>
    <div class="Pencarian">
      <button class="button" type="reset">
              <svg
                viewBox="0 0 24 24"
                height="20"
                width="20"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M9.145 18.29c-5.042 0-9.145-4.102-9.145-9.145s4.103-9.145 9.145-9.145 9.145 4.103 9.145 9.145-4.102 9.145-9.145 9.145zm0-15.167c-3.321 0-6.022 2.702-6.022 6.022s2.702 6.022 6.022 6.022 6.023-2.702 6.023-6.022-2.702-6.022-6.023-6.022zm9.263 12.443c-.817 1.176-1.852 2.188-3.046 2.981l5.452 5.453 3.014-3.013-5.42-5.421z"
                ></path>
              </svg>
      </button>
    </div>
    <div id="Eventlist2">
      <select name="Jenisevent" >
        <option value="0">---- Pilih Hari ----</option>
        <option value="1">Senin</option>
        <option value="2">Selasa</option>
        <option value="3">Rabu</option>
        <option value="4">Kamis</option>
        <option value="5">Jumat</option>
        <option value="6">Sabtu</option>
        <option value="7">Minggu</option>
        </select>
    </div>
<section class="Kotak">
    <section class="Kolom1">
    <div class="Konser1">
        <nav class="AX7">
          <img src="image/Konser1.png" alt="Apeng sepenpolod">
        </nav>
        <p id="name1">AVENGED SEVENFOLD<br>The Only Stop In Asia</p>
      <div id="Kontainer">
          <img class="Lokasi" src="image/Lokasi.png" alt="Lokasi">
        <p id="location1">
          <span>Madya Stadium, Jakarta</span>
        </p>
          <img class="Tanggal" src="image/Tanggal.png" alt="Tanggal">
        <p id="date1">
          <span>Sabtu, 25 Mei, 2024</span>
        </p>
          <img class="Harga" src="image/Harga.png" alt="Harga">
        <p id="price1">
          <span>Rp 1.350.000 - 2.600.000</span>
        <p><a class="Beli1" href="Detail.html">Beli Tiket</a></p>
        </p>
      </div>
    </div>
  </section>
  
  <section class="Kolom2">
    <div class="Konser2">
      <nav class="Reality">
        <img src="image/Konser2.jpg" alt="Klub Kenyataan">
      </nav>   
      <p id="name2">Ed Sheeran <br> +-=÷×</p>     
      <div id="Kontainer">
            <img class="Lokasi" src="image/Lokasi.png" alt="Lokasi">
          </p>
          <p id="location2">
            <span>JIS, Jakarta</span>
          </p>
            <img class="Tanggal" src="image/Tanggal.png" alt="Tanggal">
          <p id="date2">
            <span>Sabtu, 2 Maret, 2024</span>
          </p>
            <img class="Harga" src="image/Harga.png" alt="Harga">
          <p id="price2">
            <span>Rp 900.000 - 5.000.000</span>
          <p><a class="Beli2" href="#">Beli Tiket</a></p>
        </div>
      </div>
    </section>
    
    <section class="Kolom3">
      <div class="Konser3">
        <nav class="Fiersa">
          <img src="image/Konser3.jpg" alt="Fiersa Basuri">
        </nav>
        <p id="name3">Liburland Festival</p>  
        <div id="Kontainer">
            <img class="Lokasi" src="image/Lokasi.png" alt="Lokasi">
          <p id="location3">
            <span>Amananah Borneo Park</span>
          </p>
            <img class="Tanggal" src="image/Tanggal.png" alt="Tanggal">
          <p id="date3">
            <span>Sabtu, 13 Juli, 2024</span>
          </p>
            <img class="Harga" src="image/Harga.png" alt="Harga">
          <p id="price3">
            <span>Rp 150.000 - 600.000</span>
          <p><a class="Beli3" href="#">Beli Tiket</a></p>
          </p>
        </div>
      </div>
    </section>
</section>
</main>
<footer>
    <p>Copyright 2024</p>
</footer>
</body>
</html>