module.exports = {
	main: {
	  files: [
	    {
        expand: true,
        cwd: 'node_modules/bootstrap/scss/',
        src: ['**'],
        dest: 'src/scss/vendor/bootstrap/'
      },
	  ]
	}
}
