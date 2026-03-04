module.exports = function(grunt) {
	// Project configuration.
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
		makepot: {
			target: {
				options: {
					domainPath: '/languages/',
					mainFile: 'vamtam-testimonials.php',
					potFilename: 'vamtam-testimonials.pot',
					type: 'wp-plugin',
				}
			}
		},
	});

	require('matchdep').filterDev('grunt-*').forEach( grunt.loadNpmTasks );
};