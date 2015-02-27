module.exports = function(grunt) {

    // 1. All configuration goes here 
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),


browserSync: {
    dev: {
        files: {
            src : ['assets/css/main.css', 'site/**/*.php', 'content/**/*.txt']

        },
        options: {
            proxy: "localhost:8888",
            watchTask: true,
            notify: false,
        },
        ghostMode:{
            clicks: true,
            scroll: true,
            forms: false
        },
        logLevel: "debug",
    }
},



        watch: {
            markup: {
                files: ['index.php'],
            },
            scripts: {
                files: ['assets/js/**/*.js'],
                tasks: ['concat', 'uglify'],
                options: {
                    spawn: false,
                }
            },
            css: {
                files: ['assets/sass/*.scss'],
                tasks: ['sass'],
                options: {
                    spawn: false,
                }
            }
        },


          concat: {
            basic_and_extras: {
              files: {
                'assets/js/build/production.js': ['assets/js/production/*.js'],
                'assets/js/build/home.js': ['assets/js/home/*.js'],
              },
            },
          },



        uglify: {
            build: {
                src: 'assets/js/build/production.js',
                dest: 'assets/js/build/production.min.js'
            },
            home: {
                src: 'assets/js/build/home.js',
                dest: 'assets/js/build/home.min.js'
            },
        },

        sass: {
            dist: {
                options: {
                    style: 'compressed'
                },
                files: {
                    'assets/css/main.css': 'assets/sass/main.scss'
                }
            } 
        }


    });

    // 3. Where we tell Grunt we plan to use this plug-in.
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-browser-sync');

    // 4. Where we tell Grunt what to do when we type "grunt" into the terminal.
    grunt.registerTask('default', ['concat', 'uglify']);
    grunt.registerTask('derp', ['browserSync', 'watch']);

};