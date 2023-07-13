<?php include('headerAIM3.php') ?>
<?php
$nombre = "";
$precio_act = "";
$img = "";
if (isset($_GET['nom'])) {
    switch (($_GET['nom'])) {
        case 'cam1':
            $nombre = "Camara Web Webcam Iqual Iqlive Full Hd 1080p";
            $precio_act = 4500;
            $img = "./img/WebcamIqual50.jpg";
            break;
        case 'cam2':
            $nombre = "Webcam Vidlok W90 HD";
            $precio_act = 5500;
            $img = "./img/WebcamVidlok50.jpg";
            break;
        case 'cam3':
            $nombre = "Camara Ip Nexxt Exterior a Bateria (Nhc-o630) Smart Home";
            $precio_act = 4500;
            $img = "./img/CamaraIpNexxt50.jpg";
            break;
        case 'acc1':
            $nombre = "Hub Usb 3.0 Tp-link Uh400 4 Puertos Usb 3.0";
            $precio_act = 3500;
            $img = "./img/HubUsb30Tp-link50.jpg";
            break;
        case 'acc2':
            $nombre = "Mouse Con Luces Gamer GTC Mgg-015";
            $precio_act = 3000;
            $img = "./img/MouseGtc50.jpg";
            break;
        case 'acc3':
            $nombre = "Kit Teclado Y Mouse Logitech Mk120 Español Usb Negro";
            $precio_act = 2000;
            $img = "./img/KitTyMLogitech50.jpg";
            break;
        case 'par1':
            $nombre = "Parlante Portátil Philco 94DJP15 Bluetooth Full Led";
            $precio_act = 6650;
            $img = "./img/ParlantePortatil-Philco50.jpg";
            break;
        case 'par2':
            $nombre = "Parlante Bluetooth Bose Home Speaker 500";
            $precio_act = 4500;
            $img = "./img/ParlanteBluetoothBose50.jpg";
            break;
        case 'par3':
            $nombre = "Parlante Stromberg Bump Woofer 12 Pulgadas Bafle Potenciado";
            $precio_act = 5000;
            $img = "./img/ParlanteStrombergBump50.jpg";
            break;
        case 'rym1':
            $nombre = "Modem Adsl Router Tp-link Td-w8961nd Wireless 300m";
            $precio_act = 5000;
            $img = "./img/ModemAdslRouterTp-link50.jpg";
            break;
        case 'rym2':
            $nombre = "Mr30g Router Wir Mercusys Gigabit Ac1200 4 Ant (0615) Tp-link";
            $precio_act = 6850;
            $img = "./img/Mr30gRouterWirMercusys50.jpg";
            break;
        case 'rym3':
            $nombre = "Router Wireless Nexxt Nebula 301 Plus - 300mbps 4 Antenas (Ncr-n301-a)";
            $precio_act = 2500;
            $img = "./img/RouterWireless301plus50.jpg";
            break;
        case 'cel1':
            $nombre = "Motorola Edge 30 Fusion XT 2243-1 256 GB Negro Cuarzo";
            $precio_act = 26550;
            $img = "./img/MotorolaEdge30FusionXt50.png";
            break;
        case 'cel2':
            $nombre = "Samsung Galaxy A04e 64 GB / 3 GB RAM Blue SM-A042MLBFARO";
            $precio_act = 21550;
            $img = "./img/SamsungGalaxyA0450.jpg";
            break;
        case 'cel3':
            $nombre = "Samsung Galaxy Z Flip4 5G 256 GB / 8 GB RAM Grafito";
            $precio_act = 17550;
            $img = "./img/SamsungGalaxyZFlip50.jpg";
            break;
    }
}
?>
<?php
$precio_total = $precio_act
?>
<section class="listacarrito">
    <div class="enc1">
        <h2>LISTA DE PRODUCTOS AGREGADOS</h2>
    </div>
    <div class="proind">
        <ul>
            <li><img src="<?php echo $img ?>"> <?php echo $nombre ?></li>
        </ul>
    </div>
    <div class="preind">
        <ul>
            <li>$ <?php echo $precio_act ?></li>
        </ul>
    </div>
    <p>Precio Total: $<?php echo $precio_total ?></p>
    <div><a class="compra_total" href="#">TERMINAR COMPRA</a></div>
</section>
<?php include('footerAIM3.php') ?>
</body>

</html>