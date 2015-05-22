module.exports = function(grunt) {
    'use strict';

    // configuração do projeto
    var gruntConfig = {
        pkg: grunt.file.readJSON('package.json'),
        jshint: {
            all: ['app/webroot/js/app.js']
        },
        uglify: {
            target: {
              files: {
                'app/webroot/js/app.min.js': [
                    'app/webroot/js/app.js',
                    'app/webroot/vendor/lavalamp/jquery.lavalamp.min.js',
                    'app/webroot/vendor/perfect-scrollbar/js/perfect-scrollbar.jquery.js',
                    'app/webroot/js/jquery.easing.1.3.js',
                    ]
              }
            }
        },
        cssmin: {
          target: {
            files: {
                'app/webroot/css/app.min.css': [
                  'app/webroot/css/app.css',
                  'app/webroot/vendor/animate/animate.css',
                  'app/webroot/vendor/perfect-scrollbar/css/perfect-scrollbar.css',
                  'app/webroot/css/media_queries.css',
                  'app/webroot/css/cleanance_wall.css',
                  'app/webroot/css/desafio.css',
                  'app/webroot/css/footer.css',
                  'app/webroot/css/formulario.css',
                  'app/webroot/css/home.css',
                ]
            }
          }
        },
        watch: {
            src: {
                files: [
                  'app/webroot/css/app.css',
                  'app/webroot/vendor/animate/animate.css',
                  'app/webroot/vendor/perfect-scrollbar/css/perfect-scrollbar.css',
                  'app/webroot/css/media_queries.css',
                  'app/webroot/css/cleanance_wall.css',
                  'app/webroot/css/desafio.css',
                  'app/webroot/css/footer.css',
                  'app/webroot/css/formulario.css',
                  'app/webroot/css/home.css',
                  'app/webroot/js/app.js',
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
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-jshint');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-watch');

    // tarefas
    grunt.registerTask('default', ['cssmin', 'uglify']);
    grunt.registerTask('validate', ['jshint']);
};