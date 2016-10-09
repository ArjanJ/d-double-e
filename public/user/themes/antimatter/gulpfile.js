'use strict';

const autoprefixer = require('autoprefixer');
const babel = require('babelify');
const browserify = require('browserify');
const browserSync = require('browser-sync').create()
const buffer = require('vinyl-buffer');
const eslint = require('gulp-eslint');
const gulp = require('gulp');
const nano = require('gulp-cssnano');
const postcss = require('gulp-postcss');
const rename = require('gulp-rename');
const sass = require('gulp-sass');
const source = require('vinyl-source-stream');
const sourcemaps = require('gulp-sourcemaps');

const paths = {
	templates: './templates/**/*.twig',
	blueprints: './blueprints/*.yaml',
	scss: {
		src: './scss/**/**/*.scss',
		build: './css'
	},
	js: {
		entry: './js/src/index.js',
		src: './js/src/*.js',
		build: './js/build'
	}
};

gulp.task('default', ['serve']);

gulp.task('serve', ['styles', 'scripts', 'watch'], serve);

gulp.task('watch', watch);

gulp.task('scripts', ['lint'], scripts);

gulp.task('lint', lint);

gulp.task('styles', styles);

function watch() {
	gulp.watch(paths.js.src, ['scripts']);
	gulp.watch(paths.scss.src, ['styles']);
	gulp.watch([paths.templates, paths.blueprints], browserSync.reload);
}

function serve() {
	browserSync.init({
		proxy: '192.168.33.10',
		port: 3000,
		open: false,
		notify: false
	});
}

function styles() {
	return gulp.src(paths.scss.src)
		.pipe(sourcemaps.init())
		.pipe(sass().on('error', sass.logError))
		.pipe(postcss([
			autoprefixer()
		]))
		.pipe(nano())
		.pipe(rename('bluku.css'))
		.pipe(sourcemaps.write('./'))
		.pipe(gulp.dest(paths.scss.build))
		.pipe(browserSync.stream());
}

function scripts() {
	const bundler = browserify({
		entries: [paths.js.entry],
		debug: true
	})
	.transform(babel.configure({
		presets: ['es2015']
	}));

	return bundler
		.bundle()
		.on('error', handleError)
		.pipe(source('bundle.js'))
		.pipe(buffer())
		.pipe(sourcemaps.init({ loadMaps: true }))
		.pipe(sourcemaps.write('./'))
		.pipe(gulp.dest(paths.js.build))
		.pipe(browserSync.stream());
}

function lint() {
	return gulp.src(paths.js.src)
		.pipe(eslint())
		.pipe(eslint.format());
}

function handleError(err) {
	console.log(err.toString());
	this.emit('end');
}