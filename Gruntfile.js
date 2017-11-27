module.exports = function(grunt) {
  // zjistujeme cas behu tasku
  require('time-grunt')(grunt);

  // automaticky nacteme tasky v /grunt
  // pouzivame pritom zrychlene nacteni pomoci jit-grunt
  require('load-grunt-config')(grunt, {
    jitGrunt: true
  });
};
