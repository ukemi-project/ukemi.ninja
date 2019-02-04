module.exports = function(grunt) {
	grunt.initConfig({
		uncss: {
			dist: {
				files: [{ src: './rules/index.html', dest: 'cleancss/rules.css' }],
			},
		},
		cssmin: {
			dist: {
				files: [{ src: 'cleancss/rules.css', dest: 'cleancss/rules.css' }],
			},
		},
	});

	// Load the plugins
	grunt.loadNpmTasks('grunt-uncss');
	grunt.loadNpmTasks('grunt-contrib-cssmin');

	// Default tasks.
	grunt.registerTask('default', ['uncss', 'cssmin']);
};
