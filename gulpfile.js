var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

//  NEW STUFF IM WORKING ON LEAVE!!!
/* elixir(function(mix) {

  mix.sass('app.scss', 'resources/css');


    mix.styles([
        'libs/bootstrap.min.css',
        'app.css',
        'libs/select2.min.css'
    ]);

    mix.scripts([
        'libs/jquery.js',
        'libs/select2.min.js'
    ]);

});
*/
// PHPUNIT TEST
// you can use phpUnit to test stuff. you can see if things pass or fail. check in the tests directory...and ExampleTest.php to see
// what it is looking for. you can all run gulp tdd' in terminal which is like 'gulp watch' it runs automtically and when you makes changes it will tellyou green light or red light 

    /*
    elixir(function(mix) {

    mix.phpUnit();
    });
    */



// STYLES WITH DIFFERENT OUTPUT NAME (final.css) AND NEW LOCATION
// merge these two files together. second argument is the dedicated output file name (what we want to see in our view), third argument is where you would like to place these files
// normally it defaults to placing css files under resources and then css folder
// so we can override that in the third argument

/*  elixir(function(mix) {
    mix.sass('app.scss').coffee();

        mix.styles([
        'vendor/normalize.css',
        'app.css'
    ], 'public/output/final.css', 'public/css');
    });
*/



// STYLES WITH DEFAULT OUTPUT (all.css) AND NEW LOCATION
// normalize is just a popular library that normalizes all of the various elements from browswer to browser
// if we want to combine these all into one and then just make a single request from our master page
// list the files. start with this one and then add app.css
// by default, laravel assumes that any css you have will be placed in resoursces/css. but we are interestd in putting it under public/css and we can override that in the third agrument
// the second argument is the the output directory or file name.
// the third argument is public css. look for public/css and then vendor/normalize.css

/*  elixir(function(mix) {
    mix.sass('app.scss').coffee();

        mix.styles([
        'vendor/normalize.css',
        'app.css',
        ] null, 'public/css');
    });
*/

// CACHE BUSTING
//if we run this we will get an all.css file
// but when you push this up to production, you might have your server cache this for a really long time
// and that way we don't have to redownload it each time. we just reference a cached version
// that's great. but when it comes to making a simple update,if you were to push that up to production, your server would still refernce the cached version of the file.
// so we want to leverage cache busting. you can do this by calling a version() method
// so we want to version this specific file 'all.css'
// now if we run this code we will see that the sass compiled and there is a build directory and this is where we store everything
// public/build/css/
// notice that it has a unique extension...that's how we get the cache busting when we push it up to production
// when we make a change to the app.scss file, you'll notice that the extension updates
// to handle this in your view. go to the master page app.blade.php and you'll do an elixir function where you reference your usual path 
// <link rel="stylesheet" href="{{ elixir('css/all.css') }}">
// behind the scenes, laravel will read our manifest file, and figure out that this file "css/all.css" actually corresponds to this version "css/all-0d57812f.css"
// make a change to file, run gulp, and you'll see the file number change instantly!

/*
 elixir(function(mix) {

    mix.sass('app.scss');

    mix.styles(['vendor/normalize.css', 'app.css'], null, 'public/css');

    mix.version('public/css/all.css');
});
*/




// SCRIPTS WITH DIFFERENT OUTPUT NAME AND DIFFERENT LOCATION
// to do scripts you would write
// it will assume resouces/js by default
// normally it defaults to placing js files under resources and then js folder
// the same is true for your scripts. it will assume resources/js by default
// but if you want to modify that just set the third arugment

/* elixir(function(mix) {
   mix.sass('app.scss').coffee();

    mix.scripts([
        'vendor/jquery.js',
        'main.js',
        'coupon.js'
    ], 'public/output/scripts.js', 'public/js');
    });
*/



