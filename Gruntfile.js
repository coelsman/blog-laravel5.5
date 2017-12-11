module.exports = function(grunt) {
	grunt.initConfig({
		pkg: grunt.file.readJSON('package-lock.json'),
		concat: {
			dist: {
				src: [
					'resources/src/scss/variables.scss',
					'resources/src/scss/mixins.scss',
					'resources/src/scss/main.scss',
					'resources/src/scss/responsive.scss'
				],
				dest: 'resources/src/scss/build.scss',
			}
		},
		sass: {
			dist: {
				options: {
					style: 'expanded',
				},
				files: {
					'public/css/style.css': 'resources/src/scss/build.scss'
				}
			}
		},
		uglify: {
			my_target: {
				files: {
					'public/js/script.min.js': [
						'public/libs/moment-with-locales.js',
						'resources/src/js/configs/async.js',
						'resources/src/js/configs/paginator.js',
						'resources/src/js/app.js',
						'resources/src/js/handlebars/helper.js',
						'resources/src/js/socket.js',
						'resources/src/js/search.js',
						'resources/src/js/events.js',
						'resources/src/js/post.js'
					],
				},
			},
		},
	});
	grunt.loadNpmTasks('grunt-contrib-concat');
	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-contrib-uglify');

	grunt.registerTask('default', ["concat", "sass", "uglify"]);
};