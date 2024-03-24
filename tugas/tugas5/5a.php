<?php 
$student = [
  
            ["nama" => "Akil Berani",
              "npm" => "233040017",
              "email" => "kukang@gmail.com ",
              "jurusan" => "Teknik Informatika",  
              "gambar" => "1"         
            ],
            ["nama" => "Mamat Kopling",
              "npm" => "233040035",
              "email" => "mmbeee@gmail.com ",
              "jurusan" => "Teknik Farmasi",
              "gambar" => "2"
            ],
            ["nama" => "Liukang Obeng",
              "npm" => "233040029",
              "email" => "maudibalikjugasamaaja@gmail.com ",
              "jurusan" => "Teknik Ekonomi Bisnis",  
              "gambar" => "3"           
            ],
            ["nama" => "Junaidi Amplop",
              "npm" => "233040036",
              "email" => "tidakgagahtapilunak@gmail.com ",
              "jurusan" => "Hukum Perdata",
              "gambar" => "4"
            ],
            ["nama" => "Bisma laundry",
              "npm" => "233040017",
              "email" => "leherpanjangbersayap@gmail.com ",
              "jurusan" => "Sastra Mesin",
              "gambar" => "5"
            ],
            ["nama" => "Mio Mirza",
              "npm" => "233040005",
              "email" => "untungbukanbuayadarat@gmail.com ",
              "jurusan" => "Teknik Elektro",
              "gambar" => "6"
            ],
            ["nama" => "Banteng Loncat",
              "npm" => "233040009",
              "email" => "nocommentperbantengan@gmail.com ",
              "jurusan" => "Teknologi Pangan",
              "gambar" => "7"
            ],
            ["nama" => "Sopo",
              "npm" => "233040105",
              "email" => "kejamamat@gmail.com ",
              "jurusan" => "Teknik Industri",
              "gambar" => "8"
            ],
             ["nama" => "Luhut Panjaitan",
              "npm" => "233040125",
              "email" => "udahlenturdarilahir@gmail.com ",
              "jurusan" => "Teknik Hubungan Internasional",
              "gambar" => "9"
            ],
            ["nama" => "Mangga Berduri",
              "npm" => "233040002",
              "email" => "mampuskaubukanya@gmail.com ",
              "jurusan" => "Hukum Pidana",
              "gambar" => "10"
            ]

            ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>List Mahasiswa</title>
  <style>
    
    .container {
        
        width: 500px;
        height: 2600px;
        background-color: grey;
        padding: 5px;
        border: 2px solid black;
    }

    h1 {
        font-family: "Rubik";
    }
  </style>
</head>
<body>
    <div class="container"> 
        <h1>Daftar Mahasiswa</h1>
            <?php foreach ($student as $students) : ?>
                <ul>
                    <img src="https://randomuser.me/api/portraits/men/<?= $students['gambar'] ?>.jpg" width="150" height="150">
                    <li>Nama : <?= $students["nama"]; ?></li>
                    <li>NPM : <?= $students["npm"]; ?></li>
                    <li>Email : <?= $students["email"]; ?></li>
                    <li>Jurusan : <?= $students["jurusan"]; ?></li>
                </ul>
            <?php endforeach; ?>
    </div>
</body>
</html> 