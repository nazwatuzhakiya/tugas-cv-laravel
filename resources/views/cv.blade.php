<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV - Nazwatuzhakiya Latansha</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        * { box-sizing: border-box; }
        body {
            font-family: "Poppins", sans-serif;
            background: linear-gradient(135deg, #ffe6ee, #fff1f6);
            margin: 0; padding: 40px; color: #555;
            display: flex; justify-content: center; align-items: center; min-height: 100vh;
        }

        .container {
            width: 100%; max-width: 800px;
            background: rgba(255, 255, 255, 0.9);
            padding: 40px; border-radius: 30px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            border: 1px solid rgba(255, 255, 255, 0.3);
            position: relative; 
            overflow: hidden; 
            /* efek js */
        }

        /* pop up */
        .container:hover {
            transform: scale(1.02);
            background: rgba(255, 255, 255, 1);
            box-shadow: 0 20px 40px rgba(231, 84, 128, 0.15);
        }

        /* cahaya gerak */
        .glow-effect {
            position: absolute;
            width: 500px;
            height: 500px;
            background: radial-gradient(circle, rgba(231, 84, 128, 0.12) 0%, transparent 70%);
            border-radius: 50%;
            pointer-events: none;
            transform: translate(-50%, -50%);
            transition: opacity 0.3s;
            opacity: 0;
            z-index: 0;
        }

        .content { position: relative; z-index: 1; }

        h1 { text-align: center; color: #e75480; font-size: 36px; margin: 0; }
        h2 { color: #e88ca8; border-bottom: 3px dashed #f6b6c9; margin-top: 30px; padding-bottom: 5px; }
        
        img { 
            display: block; margin: 20px auto; width: 130px; 
            border-radius: 50%; border: 5px solid #f6b6c9; 
            transition: transform 0.3s;
        }
        .container:hover img { transform: scale(1.1) rotate(5deg); }

        table { width: 100%; border-collapse: collapse; margin-top: 15px; }
        table th { background: #f6b6c9; color: #fff; padding: 12px; text-align: left; }
        table td { padding: 12px; background: #fff7fa; border-bottom: 1px solid #f3d3dd; }
        
        ul, ol { line-height: 1.8; }
        a { color: #e75480; text-decoration: none; font-weight: bold; }
        .footer { text-align: center; font-size: 13px; color: #aaa; margin-top: 30px; }
    </style>
</head>
<body>

<div class="container" id="cv-card">
    <div class="glow-effect" id="glow"></div>

    <div class="content">
        <h1>Curriculum Vitae</h1>

        <h2>Data Pribadi</h2>
        <img src="https://lh3.googleusercontent.com/a/ACg8ocIZ8mBSPHlY6NN155omCB2nbx_dCtvKct30eb5P1Ylw_x9ZSVeX=s288-c-no" alt="Foto Profil" />
        <p><b>Nama:</b> Nazwatuzhakiya Latansha</p>
        <p><b>Email:</b> nazwatuzhakiya@email.com</p>
        <p><b>Telepon:</b> 0838-7512-7164</p>
        <p><b>Domisili:</b> Subang, Jawa Barat, Indonesia</p>

        <h2>Profil Singkat</h2>
        <p>
            Mahasiswa Program Studi Sistem Informasi yang memiliki minat pada bidang
            pengembangan web dan teknologi frontend. Terbiasa bekerja secara tim,
            bertanggung jawab, serta memiliki motivasi tinggi untuk terus belajar
            dan mengembangkan kemampuan di bidang teknologi informasi.
        </p>

        <h2>Pendidikan</h2>
        <table>
            <tr>
                <th>Tahun</th>
                <th>Institusi</th>
                <th>Program Studi</th>
            </tr>
            <tr>
                <td>2024 - Sekarang</td>
                <td>Politeknik Negeri Subang</td>
                <td>D3 Sistem Informasi</td>
            </tr>
            <tr>
                <td>2021 - 2024</td>
                <td>SMK Negeri 1 Cikaum</td>
                <td>Rekayasa Perangkat Lunak</td>
            </tr>
        </table>

        <h2>Keahlian</h2>
        <ul>
            <li>HTML (Dasar)</li>
            <li>CSS (Dasar)</li>
            <li>JavaScript (Dasar)</li>
            <li>Microsoft Office</li>
        </ul>

        <h2>Pengalaman & Proyek</h2>
        <ol>
            <li>Anggota kepengurusan HIMATIKOM periode 2024–2025</li>
            <li>Pengembangan sistem kasir Toko Berkah Diesel (2025)</li>
            <li>Pengembangan website DIFEST & Robofest JTIK (2024–2025)</li>
            <li>Pengembangan sistem inventory gudang obat (2023)</li>
            <li>Pengembangan sistem manajemen pengelolaan kos berbasis web (2025)</li>
        </ol>

        <h2>Portofolio</h2>
        <p>
            GitHub: <a href="https://github.com/Nazwatuzhakiya" target="_blank">github.com/Nazwatuzhakiya</a>
        </p>

        <hr style="border: 1px solid #f6b6c9; margin-top: 20px;">
        <p class="footer">Dibuat dengan Laravel & JavaScript Glow Effect</p>
    </div>
</div>

<script>
    const card = document.getElementById('cv-card');
    const glow = document.getElementById('glow');

    card.addEventListener('mouseenter', () => {
        glow.style.opacity = '1';
    });

    card.addEventListener('mousemove', (e) => {
        const rect = card.getBoundingClientRect();
        const x = e.clientX - rect.left;
        const y = e.clientY - rect.top;

        // cahaya ikut kursor
        glow.style.left = `${x}px`;
        glow.style.top = `${y}px`;
    });

    card.addEventListener('mouseleave', () => {
        glow.style.opacity = '0';
    });
</script>

</body>
</html>