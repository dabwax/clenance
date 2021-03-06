module.exports = function(grunt) {
    'use strict';

    // configuração do projeto
    var gruntConfig = {
        pkg: grunt.file.readJSON('package.json'),
        jshint: {
            all: ['webroot/js/app.js']
        },
        uglify: {
            target: {
              files: {
                'webroot/js/app.min.js': [
                    'webroot/js/app.js',
                    'webroot/js/desafio.js',
                    'webroot/vendor/lavalamp/jquery.lavalamp.min.js',
                    'webroot/vendor/jwindowcrop/jquery.jWindowCrop.js',
                    'webroot/vendor/perfect-scrollbar/js/perfect-scrollbar.jquery.js',
                    'webroot/vendor/maskedinput/jquery.maskedinput.min.js',
                    'webroot/vendor/imgliquid/js/imgLiquid-min.js',
                    'webroot/vendor/rotatable/jquery.ui.rotatable.min.js',
                    'webroot/vendor/jsviews.min.js',
                    'webroot/vendor/notify.min.js',
                    'webroot/js/jquery.easing.1.3.js',
                    'webroot/js/desafio_stickers.js',
                    'webroot/js/jquery.draggableTouch.js',
                    ]
              }
            }
        },
        cssmin: {
          target: {
            files: {
                'webroot/css/app.min.css': [
                  'webroot/css/app.css',
                  'webroot/vendor/animate/animate.css',
                  'webroot/vendor/perfect-scrollbar/css/perfect-scrollbar.css',
                  'webroot/vendor/jwindowcrop/jWindowCrop.css',
                  'webroot/vendor/rotatable/jquery.ui.rotatable.css',
                  'webroot/css/media_queries.css',
                  'webroot/css/cleanance_wall.css',
                  'webroot/css/desafio.css',
                  'webroot/css/footer.css',
                  'webroot/css/formulario.css',
                  'webroot/css/home.css',
                  'webroot/css/linha.css',
                ]
            }
          }
        },
        watch: {
            src: {
                files: [
                  'webroot/css/app.css',
                  'webroot/vendor/animate/animate.css',
                  'webroot/vendor/perfect-scrollbar/css/perfect-scrollbar.css',
                  'webroot/css/media_queries.css',
                  'webroot/css/cleanance_wall.css',
                  'webroot/css/desafio.css',
                  'webroot/css/footer.css',
                  'webroot/css/formulario.css',
                  'webroot/css/home.css',
                  'webroot/js/app.js',
                  'webroot/js/desafio.js',
                  'webroot/css/linha.css',
                  'webroot/js/desafio_stickers.js',
                ],
                tasks: ['default'],
                options: {
                  livereload: true,
                }
            },
        }
    };

    grunt.initConfig(gruntConfig);

    // carregando plugins
    grunt.loadNpmTasks('grunt-newer');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-jshint');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-watch');

    // tarefas
    grunt.registerTask('default', ['newer:cssmin', 'newer:uglify']);
    grunt.registerTask('validate', ['jshint']);
};