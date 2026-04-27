<?php
$brand = [
    "name" => "HWS Store",
    "tagline" => "Little Outfits, Big Dreams",
    "whatsapp" => "6285765614969",
];

$philosophy = [
    [
        "title" => "Matahari Terbit", 
        "subtitle" => "Pendidikan & Harapan",
        "icon" => "🌅", 
        "desc" => "Simbol pencerahan, ilmu pengetahuan, dan harapan masa depan cerah bagi anak-anak Indonesia.",
        "color" => "from-yellow-500/10 to-orange-500/5", 
        "border" => "border-yellow-500/20"
    ],
    [
        "title" => "Hanger Torquis", 
        "subtitle" => "Pondasi Bisnis",
        "icon" => "👗", 
        "desc" => "Kendaraan utama yang menopang misi pendidikan dengan kesan segar, kreatif, dan profesional.",
        "color" => "from-[#00acc1]/10 to-cyan-500/5", 
        "border" => "border-[#00acc1]/20"
    ],
    [
        "title" => "HWS Rounded", 
        "subtitle" => "Kekeluargaan",
        "icon" => "🟢", 
        "desc" => "Bentuk membulat melambangkan kasih sayang ibu dan pertumbuhan bisnis hijau yang sehat sejak 2010.",
        "color" => "from-[#689f38]/10 to-green-500/5", 
        "border" => "border-[#689f38]/20"
    ],
    [
        "title" => "Bunga Pink Kecil", 
        "subtitle" => "Pertumbuhan Anak",
        "icon" => "🌸", 
        "desc" => "Melambangkan keceriaan dan kepolosan anak-anak, serta hasil indah dari setiap usaha kita.",
        "color" => "from-pink-500/10 to-rose-500/5", 
        "border" => "border-pink-500/20"
    ],
    [
        "title" => "English Tagline", 
        "subtitle" => "The Future Begins",
        "icon" => "✨", 
        "desc" => "Menegaskan bahwa setiap transaksi adalah langkah nyata untuk masa depan pendidikan bangsa.",
        "color" => "from-slate-400/10 to-white/5", 
        "border" => "border-slate-400/20"
    ]
];
?>

<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $brand['name']; ?> | Social Enterprise Profile</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;800&display=swap" rel="stylesheet">
    <style>
        body { 
            font-family: 'Plus Jakarta Sans', sans-serif; 
            background-color: #020406; 
            color: #ffffff;
        }
        
    

        .glass {
            background: rgba(0, 0, 0, 0.6);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.05);
        }

        .glass-card {
            background: rgba(255, 255, 255, 0.02);
            backdrop-filter: blur(15px);
            border: 1px solid rgba(255, 255, 255, 0.05);
            transition: all 0.5s cubic-bezier(0.16, 1, 0.3, 1);
        }

        .glass-card:hover {
            transform: translateY(-10px);
            background: rgba(255, 255, 255, 0.05);
            box-shadow: 0 20px 40px rgba(0,0,0,0.4);
        }

        .text-glow {
            text-shadow: 0 0 30px rgba(104, 159, 56, 0.3);
        }
    </style>
</head>
<body class="bg-mesh min-h-screen">

    <nav class="fixed w-full z-50 top-6 px-6">
        <div class="max-w-5xl mx-auto glass rounded-full px-8 py-4 flex justify-between items-center">
            <div class="text-xl font-extrabold tracking-tighter">HWS<span class="text-[#689f38]">.</span></div>
            <div class="hidden md:flex space-x-8 text-[10px] font-bold uppercase tracking-[0.3em] text-slate-500">
                <a href="#home" class="hover:text-white transition">Home</a>
                <a href="#about" class="hover:text-white transition">Story</a>
                <a href="#philosophy" class="hover:text-white transition">Philosophy</a>
            </div>
            <a href="https://wa.me/<?php echo $brand['whatsapp']; ?>" class="bg-[#689f38] text-white px-6 py-2 rounded-full text-[10px] font-black hover:bg-white hover:text-black transition uppercase">Contact</a>
        </div>
    </nav>

    <section id="home" class="relative pt-52 pb-20 px-6 text-center">
        <div class="max-w-4xl mx-auto">
            <span class="inline-block px-4 py-1 rounded-full border border-[#689f38]/30 text-[9px] font-bold tracking-[0.5em] uppercase text-[#689f38] mb-8">
                Official Profile
            </span>
            <h1 class="text-5xl md:text-8xl font-extrabold tracking-tighter leading-[0.9] mb-8 text-glow">
                Little Outfits,<br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#689f38] via-[#00acc1] to-pink-500">Big Dreams.</span>
            </h1>
            <p class="text-slate-400 text-lg max-w-2xl mx-auto leading-relaxed opacity-80 italic">
                "From Here, The Future Begins."
            </p>
        </div>
    </section>

    <section id="about" class="py-24 px-6 max-w-6xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="md:col-span-2 glass-card rounded-[3rem] p-12 relative overflow-hidden">
                <div class="absolute top-0 right-0 p-8 opacity-10">
                    <svg width="120" height="120" viewBox="0 0 24 24" fill="white"><path d="M13 14.725c0-5.141 3.892-10.519 10-11.725l.944 2c-3.089 1.133-4.944 4.588-4.944 7.087h5v9.913h-11v-7.275zm-12 0c0-5.141 3.892-10.519 10-11.725l.944 2c-3.089 1.133-4.944 4.588-4.944 7.087h5v9.913h-11v-7.275z"/></svg>
                </div>
                <h2 class="text-3xl font-extrabold mb-8 tracking-tighter text-[#689f38] italic">The Heart of HWS</h2>
                <p class="text-slate-300 leading-relaxed text-lg font-light">
                    Didirikan sejak tahun 2010, HWS Store bukan sekadar unit bisnis retail pakaian anak. Dikelola oleh seorang pendidik yang memiliki visi besar untuk membangun sekolah bagi anak-anak yang kurang beruntung, toko ini mengusung misi "Social Enterprise".
                </p>
                <p class="text-slate-300 leading-relaxed text-lg font-light mt-6">
                    Di sini, kemandirian ekonomi melalui perdagangan digunakan sebagai mesin penggerak pendidikan nirlaba. Setiap transaksi yang terjadi didedikasikan untuk menyediakan akses pendidikan berkualitas bagi mereka yang membutuhkan.
                </p>
            </div>
            <div class="bg-gradient-to-br from-[#689f38]/20 to-transparent glass-card rounded-[3rem] p-12 flex flex-col justify-center text-center">
                <div class="text-6xl font-black mb-2 text-white">15+</div>
                <div class="text-[10px] uppercase tracking-[0.3em] font-bold text-[#689f38]">Tahun Berdedikasi</div>
                <div class="mt-8 pt-8 border-t border-white/5">
                    <p class="text-[10px] text-slate-500 uppercase tracking-widest font-bold">Misi Utama</p>
                    <p class="text-sm italic text-slate-300 mt-2">"Pendidikan untuk Semua"</p>
                </div>
            </div>
        </div>
    </section>

    <section id="philosophy" class="py-24 px-6 max-w-7xl mx-auto">
        <div class="text-center mb-16">
            <h2 class="text-[10px] font-black tracking-[0.6em] uppercase text-slate-600 mb-4">Brand Core Philosophy</h2>
            <p class="text-slate-400 font-light italic">Elemen yang menyatukan bisnis dan kontribusi sosial.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php foreach($philosophy as $index => $p): ?>
            <div class="glass-card <?php echo $p['color']; ?> <?php echo $p['border']; ?> rounded-[2.5rem] p-10 group <?php echo ($index == 4) ? 'lg:col-span-2' : ''; ?>">
                <div class="flex flex-col h-full">
                    <span class="text-6xl mb-8 block group-hover:scale-110 transition-transform duration-500">
                        <?php echo $p['icon']; ?>
                    </span>
                    <div>
                        <h3 class="text-white font-extrabold text-xl tracking-tight mb-1"><?php echo $p['title']; ?></h3>
                        <p class="text-[#689f38] text-[10px] font-black uppercase tracking-widest mb-6 italic"><?php echo $p['subtitle']; ?></p>
                        <div class="w-12 h-[2px] bg-gradient-to-r from-white/20 to-transparent mb-6"></div>
                        <p class="text-slate-400 text-sm leading-relaxed font-light"><?php echo $p['desc']; ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="py-20 px-6 text-center">
        <div class="max-w-4xl mx-auto glass-card rounded-[4rem] p-16 relative overflow-hidden">
            <h2 class="text-3xl md:text-4xl font-extrabold mb-6 tracking-tight italic">"From Here, The Future Begins"</h2>
            <p class="text-slate-400 mb-10 max-w-lg mx-auto font-light">
                Dukung kemandirian ekonomi dan pendidikan nirlaba bersama HWS Store.
            </p>
            <a href="https://wa.me/<?php echo $brand['whatsapp']; ?>" class="inline-block bg-white text-black px-12 py-4 rounded-full font-black text-xs uppercase tracking-widest hover:bg-[#689f38] hover:text-white transition-all shadow-xl">
                Hubungi Kami
            </a>
        </div>
    </section>

    <footer class="py-12 text-center">
        <p class="text-[9px] font-bold tracking-[0.5em] text-slate-700 uppercase">
            &copy; <?php echo date('Y'); ?> <?php echo $brand['name']; ?> • Bogors Best Social Enterprise
        </p>
    </footer>

</body>
</html>