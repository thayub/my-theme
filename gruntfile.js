module.exports = function (grunt) {
	'use strict';
    // Project configuration
    grunt.initConfig({
        // Metadata
        pkg: grunt.file.readJSON('package.json'),
        // Task configuration
        concat: {
            options: {
                banner: '<%= banner %>',
                stripBanners: true
            },
            bootstrap: {
                src: [
                  'bower_components/bootstrap/js/transition.js',
                  'bower_components/bootstrap/js/alert.js',
                  'bower_components/bootstrap/js/button.js',
                  'bower_components/bootstrap/js/carousel.js',
                  'bower_components/bootstrap/js/collapse.js',
                  'bower_components/bootstrap/js/dropdown.js',
                  'bower_components/bootstrap/js/modal.js',
                  'bower_components/bootstrap/js/tooltip.js',
                  'bower_components/bootstrap/js/popover.js',
                  'bower_components/bootstrap/js/scrollspy.js',
                  'bower_components/bootstrap/js/tab.js',
                  'bower_components/bootstrap/js/affix.js'
                ],
                dest: 'js/bootstrap.js'
              },
            dist: {
                src: [
                    'bower_components/jquery/dist/jquery.min.js',
                    'navigation.js',
                    'skip-link-focus-fix.js',
                    'js/extra.js'],
                dest: 'js/compiled.js'
            }
        },
        uglify: {
            options: {
                banner: '<%= banner %>',
                mangle: false,
                beautify: true
            },
            dist: {
                files: {
                    'dist/min.js': [
                        'js/compiled.js',
                        'js/bootstrap.js'
                    ]
                }
            }
        },
        less: {
            dist: {
                files: {
                    'dist/min.css': ['less/main.less']
                }
            }
        },
        jshint: {
            options: {
                node: true,
                curly: true,
                eqeqeq: true,
                immed: true,
                latedef: true,
                newcap: true,
                noarg: true,
                sub: true,
                undef: true,
                unused: true,
                boss: true,
                eqnull: true,
                browser: true,
                globals: {}
            },
            gruntfile: {
                src: 'gruntfile.js'
            }
        },
        watch: {
            php: {
                files: ['*.php', 'inc/*.php'],
                options: {
                    livereload: true
                }
            },
            styles: {
                files: ['less/*.less'],
                tasks: ['less'],
                options: {
                    livereload: true   
                }
            },
            gruntfile: {
                files: '<%= jshint.gruntfile.src %>',
                tasks: ['jshint:gruntfile', 'build']
            }
        }
    });

    require('matchdep').filterDev('grunt-*').forEach(grunt.loadNpmTasks);
    // Default task
    grunt.registerTask('build', ['less', 'concat', 'uglify']);
    grunt.registerTask('default', ['jshint', 'qunit', 'concat', 'uglify']);
};