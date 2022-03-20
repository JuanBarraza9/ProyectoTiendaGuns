<?php 
    $inicio = true;
    include 'includes/templates/header.php' 
    ?>

    <div class="carrousel">
        <div class="grande">
            <img class="img1" src="/build/img/slider.jpg" alt="imagen">
            <img class="img2" src="/build/img/slider2.jpg" alt="imagen">
            <img class="img3" src="/build/img/slider3.jpg" alt="imagen">
        </div>

        <ul class="puntos">
            <li class="punto activo"></li>
            <li class="punto"></li>
            <li class="punto"></li>
        </ul>
    </div>

    <main class="contenedor main">
        
        <h1>Productos más vendidos:</h1>
        <div class="main__grid">
            <div class="main__grid__producto main__grid__producto--prod-1">
                <h3>Glock 17</h3>
                <div class="main__grid__producto__imagen">
                    <picture class="">
                        <source srcset="build/img/guns/producto4 - Glock 17.webp.avif" type="image/avif">
                        <source srcset="build/img/guns/producto4 - Glock 17.webp" type="image/webp">
                        <img loading="lazy" src="/build/img/guns/producto4-Glock 17.jpg" alt="Glock 17">
                        <a class="boton-int">VER PRODUCTO</a>
                        <p class="oferta">OFERTA</p>
                    </picture>
                </div>
                <div class="precio">
                    <p class="moneda">US$ <span class="valor">499</span><small class="centavos">99</small></p>
                </div>
                <a class="boton boton agregar-carrito" data-id="1" href="#">Añadir al Carrito<i class="fa-solid fa-cart-shopping"></i></a>
            </div>
            
            <div class="main__grid__producto main__grid__producto--prod-2">
            <h3>WINCHESTER</h3>
                <div class="main__grid__producto__imagen">
                    <picture class="">
                        <img loading="lazy" src="/build/img/guns/producto1.jpg" alt="Glock 17">
                        <a class="boton-int">VER PRODUCTO</a>
                        <p class="oferta">OFERTA</p>
                    </picture>
                </div>
                <div class="precio">
                    <p class="moneda">US$ <span class="valor">799</span><small class="centavos">99</small></p>
                </div>
                <a class="boton agregar-carrito" data-id="1" href="#">Añadir al Carrito<i class="fa-solid fa-cart-shopping"></i></a>
            </div>

            <div class="main__grid__producto main__grid__producto--prod-3">
            <h3>ISSC MSR MK22</h3>
                <div class="main__grid__producto__imagen">
                    <picture class="">
                        <source srcset="build/img/guns/producto4 - Glock 17.webp.avif" type="image/avif">
                        <source srcset="build/img/guns/producto4 - Glock 17.webp" type="image/webp">
                        <img loading="lazy" src="/build/img/guns/producto2.jpg" alt="Glock 17">
                        <a class="boton-int">VER PRODUCTO</a>
                        <p class="oferta">OFERTA</p>
                    </picture>
                </div>
                <div class="precio">
                    <p class="moneda">US$ <span class="valor">1199</span><small class="centavos">99</small></p>
                </div>
                <a class="boton agregar-carrito" data-id="1" href="#">Añadir al Carrito<i class="fa-solid fa-cart-shopping"></i></a>
            </div>
        </div>
    </main> <!-- main -->

    <section class="section-cuchillo">
        <div class="contenedor cuchillos">
            <div class="cuchillos__flex">
                <div class="cuchillos__flex__texto">
                    <h3>Trabajamos con las mejores marcas en el rubro de armamentos y cuchillos.</h3>
                    <p>Phasellus a lacinia erat. Phasellus blandit tortor in arcu pulvinar, sed sagittis ante eleifend. Morbi euismod fermentum justo, in sollicitudin tortor cursus nec. Duis maximus leo quis libero congue malesuada varius eu ipsum.</p>
                    
                    <a class="boton-home" href="#">Conoce más</a>
                </div>
            </div>
        </div>
    </section> <!-- cuchillos -->

    <section class="section popular contenedor">
        <h2>Productos Populares del Mes</h2>
        <div class="popular__grid">
            <div class="popular__grid__producto popular__grid__producto--prod-1">
                <h3>MSR MK22</h3>
                <div class="popular__grid__producto__imagen">
                    <picture class="">
                        <source srcset="build/img/guns/producto4 - Glock 17.webp.avif" type="image/avif">
                        <source srcset="build/img/guns/producto4 - Glock 17.webp" type="image/webp">
                        <img loading="lazy" src="/build/img/guns/producto3.jpg" alt="Glock 17">
                        <a class="boton-int">VER PRODUCTO</a>
                        <p class="oferta">OFERTA</p>
                    </picture>
                </div>
                <div class="precio">
                    <p class="moneda">US$ <span class="valor">1299</span><small class="centavos">99</small></p>
                </div>
                <a class="boton agregar-carrito" data-id="1" href="#">Añadir al Carrito<i class="fa-solid fa-cart-shopping"></i></a>
            
            </div>
            
            <div class="popular__grid__producto popular__grid__producto--prod-2">
                <h3>BROWNING BL-22</h3>
                <div class="popular__grid__producto__imagen">
                    <picture class="">
                        <source srcset="build/img/guns/producto4 - Glock 17.webp.avif" type="image/avif">
                        <source srcset="build/img/guns/producto4 - Glock 17.webp" type="image/webp">
                        <img loading="lazy" src="/build/img/guns/producto5.jpg" alt="Glock 17">
                        <a class="boton-int">VER PRODUCTO</a>
                        <p class="oferta">OFERTA</p>
                    </picture>
                </div>
                <div class="precio">
                    <p class="moneda">US$ <span class="valor">799</span><small class="centavos">99</small></p>
                </div>
                <a class="boton agregar-carrito" data-id="1" href="#">Añadir al Carrito<i class="fa-solid fa-cart-shopping"></i></a>
            </div>
                
            <div class="popular__grid__producto popular__grid__producto--prod-3">
                <h3>STOEGER STR-9</h3>
                <div class="popular__grid__producto__imagen">
                    <picture class="">
                        <source srcset="build/img/guns/producto4 - Glock 17.webp.avif" type="image/avif">
                        <source srcset="build/img/guns/producto4 - Glock 17.webp" type="image/webp">
                        <img loading="lazy" src="/build/img/guns/stoeger-str-9.jpg" alt="Glock 17">
                        <a class="boton-int">VER PRODUCTO</a>
                        <p class="oferta">OFERTA</p>
                    </picture>
                </div>
                <div class="precio">
                    <p class="moneda">US$ <span class="valor">424</span><small class="centavos">99</small></p>
                </div>
                <a class="boton agregar-carrito" data-id="1" href="#">Añadir al Carrito<i class="fa-solid fa-cart-shopping"></i></a>
            </div>
            
            <div class="popular__grid__producto popular__grid__producto--prod-4">
                <h3>M&P 15-22</h3>
                <div class="popular__grid__producto__imagen">
                    <picture class="">
                        <source srcset="build/img/guns/producto4 - Glock 17.webp.avif" type="image/avif">
                        <source srcset="build/img/guns/producto4 - Glock 17.webp" type="image/webp">
                        <img loading="lazy" src="/build/img/guns/CARABINAS SMITH&WESSON M&P15-22.jpg" alt="Glock 17">
                        <a class="boton-int">VER PRODUCTO</a>
                    </picture>
                </div>
                <div class="precio">
                    <p class="moneda">US$ <span class="valor">999</span><small class="centavos">99</small></p>
                </div>
                <a class="boton agregar-carrito" data-id="1" href="#">Añadir al Carrito<i class="fa-solid fa-cart-shopping"></i></a>
            </div>
            
            <div class="popular__grid__producto popular__grid__producto--prod-5">
                <h3>AITOR JUNGLE</h3>
                <div class="popular__grid__producto__imagen">
                    <picture class="">
                        <source srcset="build/img/guns/producto4 - Glock 17.webp.avif" type="image/avif">
                        <source srcset="build/img/guns/producto4 - Glock 17.webp" type="image/webp">
                        <img loading="lazy" src="/build/img/guns/aitor-jungle-king-iii.jpg" alt="Glock 17">
                        <a class="boton-int">VER PRODUCTO</a>
                    </picture>
                </div>
                <div class="precio">
                    <p class="moneda">US$ <span class="valor">89</span><small class="centavos">99</small></p>
                </div>
                <a class="boton agregar-carrito" data-id="1" href="#">Añadir al Carrito<i class="fa-solid fa-cart-shopping"></i></a>
            </div>
            
            <div class="popular__grid__producto popular__grid__producto--prod-6">
                <h3>FABARM MART</h3>
                <div class="popular__grid__producto__imagen">
                    <picture class="">
                        <source srcset="build/img/guns/producto4 - Glock 17.webp.avif" type="image/avif">
                        <source srcset="build/img/guns/producto4 - Glock 17.webp" type="image/webp">
                        <img loading="lazy" src="/build/img/guns/fabarm-martial-ultrashort.jpg" alt="Glock 17">
                        <a class="boton-int">VER PRODUCTO</a>
                        <p class="oferta">OFERTA</p>
                    </picture>
                </div>
                <div class="precio">
                    <p class="moneda">US$ <span class="valor">499</span><small class="centavos">99</small></p>
                </div>
                <a class="boton agregar-carrito" data-id="1" href="#">Añadir al Carrito<i class="fa-solid fa-cart-shopping"></i></a>
            </div>
            
            <div class="popular__grid__producto popular__grid__producto--prod-7">
                <h3>REMINGTON 45</h3>
                <div class="popular__grid__producto__imagen">
                    <picture class="">
                        <source srcset="build/img/guns/producto4 - Glock 17.webp.avif" type="image/avif">
                        <source srcset="build/img/guns/producto4 - Glock 17.webp" type="image/webp">
                        <img loading="lazy" src="/build/img/guns/remington-45acp-jacketed-hollow-point-230gr.jpg" alt="Glock 17">
                        <a class="boton-int">VER PRODUCTO</a>
                        <p class="oferta">OFERTA</p>
                    </picture>
                </div>
                <div class="precio">
                    <p class="moneda">US$ <span class="valor">499</span><small class="centavos">99</small></p>
                </div>
                <a class="boton agregar-carrito" data-id="1" href="#">Añadir al Carrito<i class="fa-solid fa-cart-shopping"></i></a>
            </div>
            
            <div class="popular__grid__producto popular__grid__producto--prod-8">
                <h3>WINCHESTER</h3>
                <div class="popular__grid__producto__imagen">
                    <picture class="">
                        <source srcset="build/img/guns/producto4 - Glock 17.webp.avif" type="image/avif">
                        <source srcset="build/img/guns/producto4 - Glock 17.webp" type="image/webp">
                        <img loading="lazy" src="/build/img/guns/winchester-sxp-defender.jpg" alt="Glock 17">
                        <a class="boton-int">VER PRODUCTO</a>
                    </picture>
                </div>
                <div class="precio">
                    <p class="moneda">US$ <span class="valor">499</span><small class="centavos">99</small></p>
                </div>
                <a class="boton agregar-carrito" data-id="1" href="#">Añadir al Carrito<i class="fa-solid fa-cart-shopping"></i></a>
            </div>
        </div>
    </section>
<?php 
    include 'includes/templates/footer.php' 
?>