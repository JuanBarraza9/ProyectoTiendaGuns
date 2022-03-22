// Variables 
const btnCategorias = document.getElementById('btn-categorias'),
    btnCerrarMenu = document.getElementById('btn-menu-cerrar'),
    grid = document.getElementById('grid-cat');
    contenedorEnlacesNav = document.querySelector('#menu .contenedor-enlaces-nav'),
    contenedorSubCategorias = document.querySelector('#grid-cat .contenedor-subcategorias'),
    esDispotivoMovil = () => window.innerWidth <= 767; 

// Agregamos la clase activo al grid
btnCategorias.addEventListener('mouseover', () => {
    if(!esDispotivoMovil()){ // el ! nos dice que haga lo contrario. 
        grid.classList.add('activo');
    }
    
});

// Eliminamos la clase activo al grid
grid.addEventListener('mouseleave', () => {
    if(!esDispotivoMovil()){ // el ! nos dice que haga lo contrario. 
        grid.classList.remove('activo');
    }
});

// accedemos a todos los enlaces de las categorias y obtenemos informacion de las subcategorias
document.querySelectorAll('#menu .categorias a').forEach((elemento) => {
    //cuando pase el cursor pedimos la informacion de la subcategorias
    elemento.addEventListener('mouseenter', (e) => {
        if(!esDispotivoMovil()){
            // ejecutar otro ciclo para leer el contenido de las categorias y obtener las subcategorias
            document.querySelectorAll('#menu .subcategoria').forEach((categoria)=> {
                // primero eliminamos las clases de activo
                categoria.classList.remove('activo');
                // por cada categoria obtenemos el data set, y si es el mismo del elemento que pasamos el cursor-
                // le agregamos la clase de activo a las subcategorias
                if(categoria.dataset.categoria === e.target.dataset.categoria) {
                    categoria.classList.add('activo');
                }
            });
        };
    });
});


// Eventlisteners para mobile

document.querySelector('#btn-menu-barras').addEventListener('click', (e) => {
    e.preventDefault(); // permite que no se envie a un enlace o se recargue la pagina
    // añadimos la clase para activar el nav
    if(contenedorEnlacesNav.classList.contains('activo')){
        contenedorEnlacesNav.classList.remove('activo');
        document.querySelector('body').style.overflow = 'visible'; // esto es para quitar el scroll con el nav abierto
    } else {
        contenedorEnlacesNav.classList.add('activo');
        document.querySelector('body').style.overflow = 'hidden';
    }
});

// Click en Nuestros Productos (mobile)

btnCategorias.addEventListener('click', (e) => {
    e.preventDefault();
    grid.classList.add('activo');
    btnCerrarMenu.classList.add('activo');
});

// Boton de regresar
document.querySelector('#grid-cat .categorias .btn-regresar').addEventListener('click', (e) => {
    e.preventDefault();
    grid.classList.remove('activo');
    btnCerrarMenu.classList.remove('activo');
});

// Ingresando a las Subcategorias

document.querySelectorAll('#menu .categorias a').forEach((elemento) => {
    elemento.addEventListener('click', (e) => {
        if(esDispotivoMovil()){
            contenedorSubCategorias.classList.add('activo');
            document.querySelectorAll('#menu .subcategoria').forEach((categoria) => {
                categoria.classList.remove('activo');
                if(categoria.dataset.categoria == e.target.dataset.categoria) {
                    categoria.classList.add('activo');
                }
            });
        }
    });
});

// Boton de regresar 
document.querySelectorAll('#grid-cat .contenedor-subcategorias .btn-regresar').forEach((boton) => {
    boton.addEventListener('click', (e) => {
        e.preventDefault();
        contenedorSubCategorias.classList.remove('activo');
    });
});

// Cerrar todo
btnCerrarMenu.addEventListener('click', (e) => {
    e.preventDefault();
    document.querySelectorAll('#menu .activo').forEach((elemento) => {
        elemento.classList.remove('activo');
    });
    // es necesario poner el visible porque, sino al cerrar al menu no se puede hacer scroll
    document.querySelector('body').style.overflow = 'visible'; 
});


// imagenes producto

function imagenZoom(smallImg) {
    let fullImg=document.getElementById("imageBox");
    fullImg.src=smallImg.src;
}

