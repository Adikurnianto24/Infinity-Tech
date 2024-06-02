<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <link rel="stylesheet" href="{{ asset('css/utilities.css') }}">
    {{ $style }}


    <link rel="shortcut icon" href="{{ asset('img/tek2.png') }}" />
    <title>Infinity Tech</title>

    <script src="{{ asset('js/utilities.js') }}" defer></script>
    {{ $js ?? '' }}
</head>

<body class="m-0">

    @include('components.header')

    {{-- main contents --}}
    {{ $slot }}
    {{-- main contents --}}
    <footer>
        <div class="footer-container">
            <div class="footer-links">
                <h4>Layanan Pelanggan</h4>
                <ul class="links">
                    <li><a href="https://www.instagram.com/" class="instagram-link">Bantuan</a></li>
                    <li><a href="https://twitter.com/">Metode Pembayaran</a></li>
                    <li><a href="https://www.youtube.com/">Lacak Pesanan Pembeli</a></li>
                    <li><a href="https://www.whatsapp.com/">Gratis Ongkir</a></li>
                    <li><a href="https://www.whatsapp.com/">Pengembalian Barang & Dana</a></li>
                    <li><a href="https://www.whatsapp.com/">Hubungi Kami</a></li>
                </ul>
            </div>
            <div class="footer-kunjungi">
                <h4>Kunjungi Kami</h4>
                <ul>
                    <li>Tentang Kami</li>
                    <li>Kebijakan Kami</li>
                    <li>Kebijakan Privasi</li>
                    <li>Kontak Media</li>
                    <li>Blog</li>
                    <li>Seller Centre</li>
                </ul>
            </div>
            <div class="footer-pembayaran">
                <div>
                    <h4>Metode Pembayaran</h4>
                    <ul class="bayar">
                        <li>
                            <a href="https://www.dana.id/" class="dana-link">
                                <img src="https://i0.wp.com/umsu.ac.id/berita/wp-content/uploads/2023/09/cara-cairkan-saldo-dana-dengan-mudah-di-alfamart.jpeg?fit=318%2C159&ssl=1" alt="Dana" style="width: 70px; height: 45px;">
                            </a>
                        </li>
                        <li>
                            <a href="https://www.klikbca.com/">
                                <img src="https://umsu.ac.id/artikel/wp-content/uploads/2023/09/Cara-Mengatasi-ATM-BCA-Hilang-Tertelan-Mesin-2023-1-739x375.jpeg" alt="BCA" style="width: 70px; height: 45px;">
                            </a>
                        </li>
                        <li>
                            <a href="https://bankmandiri.co.id/">
                                <img src="https://i0.wp.com/umsu.ac.id/berita/wp-content/uploads/2023/09/Cara-Buka-Rekening-Mandiri-Online.jpg?resize=750%2C375&ssl=1" alt="MANDIRI" style="width: 70px; height: 45px;">
                            </a>
                        </li>
                        <li>
                            <a href="https://www.whatsapp.com/">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2e/BRI_2020.svg/1200px-BRI_2020.svg.png " alt="BRI" style="width: 55px; height: 35px;">
                            </a>
                        </li>
                        <li>
                            <a href="https://www.bni.co.id/id-id/">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT-oJaPHB5aF8LpbYGMHJHq-rrmr06-jW-JnwXrvT1ZE_aiV39DuLcMx9eDV3hpnIWCPHM&usqp=CAU" alt="BNI" style="width: 55px; height: 35px;">
                            </a>
                        </li>
                        <li>
                            <a href="https://www.whatsapp.com/">
                                <img src="https://home.oxygen.id/assets/images/info-pembayaran/qris-logo.png" alt="WhatsApp" style="width: 55px; height: 35px;">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>            
            </div>            
        </div>
        <div class="site-info">
            <a class="logo-link d-b" href="#"><img class="d-b" src="{{ asset('img/infinitylogo.png') }}"
                    alt="logo"></a>
            <p>&copy; 2023 Dikembangkan oleh Muhammad Adi Kurnianto - All Right Reserved</p>
        </div>
    </footer>
</body>

</html>
