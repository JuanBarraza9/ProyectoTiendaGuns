const { src, dest, watch, series } = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const postcss = require('gulp-postcss');
const autoprefixer = require('autoprefixer');
const imagemin = require('gulp-imagemin');
const concat = require('gulp-concat');
const terser = require('gulp-terser-js');
const webp = require('gulp-webp');
const avif = require('gulp-avif');
const sourcemaps = require('gulp-sourcemaps');
const cssnano = require('cssnano');
const rename = require('gulp-rename');


function css( done ) {
    //  Compilar sass
    src('src/scss/**/*.scss')// Indetificar el archivo
        .pipe( sourcemaps.init())// inicia sourcemaps
        .pipe( sass( ) )// Compilar
        .pipe( postcss([autoprefixer(), cssnano() ]) )
        .pipe( sourcemaps.write('.'))// compila
        .pipe( dest('build/css') )// Guardar el .css
    

    done();
}

function javascript ( done ) {
    src('src/js/**/*.js')
      .pipe(sourcemaps.init())
      .pipe(concat('bundle.js')) // final output file name
      .pipe(terser())
      .pipe(sourcemaps.write('.'))
      .pipe(rename({ suffix: '.min' }))
      .pipe(dest('build/js'))

    done();
}

function imagenes( done ) {
    src('src/img/**/*')
        .pipe( imagemin({ optimizationLevel: 3}))    
        .pipe( dest('build/img'));
    done();
}

function verWebp( done ) {
    src('src/img/**/*.{png, jpg}')
        .pipe( webp())
        .pipe( dest('build/img'))
    done();
}

function verAvif() {
    const opciones = {
        quality: 50
    }
    return src('src/img/**/*.{png, jpg}')
        .pipe( avif( opciones ))
        .pipe( dest('build/img'))
}


function dev() {
    watch( 'src/scss/**/*.scss', css ); // Parametro y luego funcion que ejecuta
    watch( 'src/img/**/*', imagenes);
    watch( 'src/js/**/*.js', javascript );
}

exports.css = css;
exports.dev = dev;
exports.imagenes = imagenes;
exports.verWebp = verWebp;
exports.verAvif = verAvif;
exports.javascript = javascript;
exports.default = series( css, dev, javascript );

// series - se inicia una tarea y hasta que finaliza, inicia la siguiente
// parallel - todas al mismo tiempo