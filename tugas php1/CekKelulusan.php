<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cek Kelulusan PHP</title>
</head>
<body style="font-family: sans-serif; display: flex; flex-direction: column; align-items: center; padding-top: 50px; background-color: #f4f4f9;">

    <div style="background: white; padding: 20px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); width: 300px;">
        <h2 style="text-align: center; color: #333;">Form Nilai</h2>
        <form method="POST" action="">
            <label style="font-weight: bold;">Masukan Nama Anda:</label><br>
            <input type="text" name="nama_user" required style="width: 100%; padding: 8px; margin: 8px 0; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;"><br>
            
            <label style="font-weight: bold;">Masukan Email Anda:</label><br>
            <input type="email" name="email_user" required style="width: 100%; padding: 8px; margin: 8px 0; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;"><br>
            
            <label style="font-weight: bold;">Masukan Nilai Anda:</label><br>
            <input type="number" name="nilai_user" required style="width: 100%; padding: 8px; margin: 8px 0; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;"><br>
            
            <button type="submit" name="btn_lulus" style="width: 100%; background-color: #4CAF50; color: white; padding: 10px; border: none; border-radius: 4px; cursor: pointer; font-size: 16px;">Cek Kelulusan</button>
        </form>
    </div>

    <?php
    if (isset($_POST['btn_lulus'])) {
        $nama = htmlspecialchars($_POST['nama_user']); 
        $email = htmlspecialchars($_POST['email_user']);
        $nilai = $_POST['nilai_user'];

        
        $status = ($nilai > 70) ? "LULUS!" : "REMEDIAL!";
        $warna = ($nilai > 70) ? "green" : "red";

        echo "<link href='https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap' rel='stylesheet'>";

        echo "<div style='
            margin-top: 30px;
            font-family: \"Poppins\", sans-serif;
            background: #ffffff;
            width: 350px;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(0,0,0,0.05);
            animation: slideIn 0.5s ease-out;
        '>";
            // Bagian Header Card (Warna dinamis)
            echo "<div style='background: $warna; padding: 15px; color: white; text-align: center;'>";
                echo "<h2 style='margin: 0; font-size: 18px; letter-spacing: 1px;'>HASIL EVALUASI</h2>";
            echo "</div>";

            // Bagian Konten
            echo "<div style='padding: 25px; text-align: center;'>";
                echo "<div style='
                    width: 60px; 
                    height: 60px; 
                    background: #f0f0f0; 
                    border-radius: 50%; 
                    margin: 0 auto 15px; 
                    display: flex; 
                    align-items: center; 
                    justify-content: center;
                    font-size: 24px;
                '>👤</div>";
                
                echo "<h4 style='margin: 0; color: #2d3436; font-weight: 600;'>$nama</h4>";
                echo "<p style='margin: 5px 0 20px; font-size: 13px; color: #636e72;'>$email</p>";
                
                echo "<div style='
                    display: inline-block;
                    padding: 8px 25px;
                    background: " . ($nilai > 70 ? '#e3fcef' : '#ffebe6') . ";
                    color: $warna;
                    border-radius: 50px;
                    font-weight: 600;
                    font-size: 14px;
                    border: 1px solid $warna;
                '>
                    $status
                </div>";
            echo "</div>";
        echo "</div>";

        //  animasi CSS 
        echo "<style>
            @keyframes slideIn {
                from { opacity: 0; transform: translateY(20px); }
                to { opacity: 1; transform: translateY(0); }
            }
        </style>";
    }
    ?>

</body>
</html>