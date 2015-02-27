var path = '/Applications/MAMP/htdocs/home_grill/wp-content/themes/home_grill';module.exports = function( grunt ) {   grunt.initConfig({  	pkg: grunt.file.readJSON('package.json'),  	uglify: {  		options: {   			// the banner is inserted at the top of the output    		banner: '/*! <%= pkg.name %> <%= grunt.template.today("dd-mm-yyyy") %> */\n'  		},  		  		dist: {    		files: {      			'scripts.js': [              'bower_components/foundation/js/foundation/foundation.js',              'bower_components/foundation/js/foundation/foundation.abide.js',              'bower_components/foundation/js/foundation/foundation.dropdown.js',              //'bower_components/owl.carousel/dist/owl.carousel.js',              'bower_components/owlcarousel/owl-carousel/owl.carousel.js',              'bower_components/jquery-zoom/jquery.zoom.js',              //'bower_components/fancybox/source/jquery.fancybox.pack.js',              'js/autotab.js',              'js/lightbox.js',              'js/perfect-scrollbar.js',              'js/cycle.js',              'js/jpreloader.js',              'js/app.js'            ],    		}  		}	  },    sprite:{      'all': {        src: 'sprites/*.png',        destImg: 'images/spritesheet.png',        destCSS: 'sprites.css',        algorithm: 'binary-tree'      }    },  cssmin: {    add_banner: {      options: {        banner: '/*\nTheme Name: <%= pkg.title %>\nTheme URI: <%= pkg.homepage %>\nDescription: <%= pkg.description %>\nVersion: <%= pkg.version %>\nAuthor: <%= pkg.author %>\nTags: <%= pkg.tags %>\nText Domain: <%= pkg.name %>\n*/'      },          files: {        'style.css': [          'stylesheets/app.css',          'stylesheets/lightbox.css',          //'bower_components/owl.carousel/dist/assets/owl.carousel.css',          //'bower_components/owl.carousel/dist/assets/owl.theme.default.css',          'bower_components/owlcarousel/owl-carousel/owl.carousel.css',          'bower_components/owlcarousel/owl-carousel/owl.theme.css',          //'bower_components/fancybox/source/jquery.fancybox.css',          'sprites.css'        ]      }    }  },  imagemin: {            dist: {                options: {                    optimizationLevel: 7,                    progressive: false                },                files: [{                    //expand: true,                    cwd: 'images/',                    src: 'images/*',                    dest: 'images/'                }]            }  },  'ftp-deploy': {      build: {        auth: {        host: 'homeegrill.com.br',        port: 21,        authKey: 'key1'      },        src: path,        dest: '/prototipo/wp-content/themes/homeegrill',        exclusions: [          path+'/node_modules/*',          path+'/node_modules',          path+'/bower_components/*',          path+'/bower_components',          path+'/sprites/*',          path+'/sprites',          path+'/scss/*',          path+'/scss',          path+'/js',          path+'/js/*',          path+'/stylesheets/*',          path+'/stylesheets',          path+'/media/*',          path+'/media',          path+'/.sass-cache/*',          path+'/.sass-cache',          path+'/Gruntfile.js',          path+'/bower.json',          path+'/README.md',          path+'/.gitignore',          path+'/.ftppass',          path+'/.bowerrc',          path+'/.DS_Store',          path+'/package.json',          path+'/.git/*',          path+'/.git',          path+'/config.rb',          path+'/fonts/*',          path+'/images/*',          path+'/img',          path+'/functions',          //path+'/inc',          path+'/temp',          //path+'/page-templates',          path+'/screenshot.png',          path+'/sprites.css',          path+'/robots.txt',          path+'/favicon.ico',          path+'/humans.txt',          path+'/Gemfile',          path+'/Gemfile.lock',          path+'/fonts/.DS_Store'        ]      }},    	watch : {          dist : {            files : [              'js/*','stylesheets/*','images/*','*.php','*.html','sprites/*'            ],                 tasks : [ 'uglify','sprite','cssmin','imagemin' ],            options: {              livereload: true            }          },        }  });    grunt.loadNpmTasks('grunt-ftp-deploy');  grunt.loadNpmTasks('grunt-contrib-uglify');  grunt.loadNpmTasks('grunt-contrib-cssmin');  grunt.loadNpmTasks('grunt-spritesmith');  grunt.loadNpmTasks('grunt-contrib-watch');  //grunt.loadNpmTasks("grunt-rsync");  grunt.loadNpmTasks('grunt-contrib-imagemin');  //grunt.loadNpmTasks('grunt-contrib-connect');  grunt.registerTask( 'default', ['ftp-deploy'] );  grunt.registerTask( 'w', [ 'watch' ] );};