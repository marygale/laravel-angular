var elixir = require('laravel-elixir');
    bowerPath  = 'vendor/bower_components/';
    bowerDestPath  = 'public/js/';

    assets = {
        js:{
            controllers: {
                files:[
                    "UsersController.js",
                    "PagesController.js"
                ],
                dest:"public/js/build/controllers.min.js",
                dir: "public/js/controllers"
            },
            services:{
                files:[
                    "UsersService.js"
                ],
                dest:"public/js/build/services.min.js",
                dir:"public/js/services"
            }
        }
    }
elixir(function(mix) {
    mix
        .copy(bowerPath + 'angular/angular.js',  bowerDestPath + 'vendor/angular.js')
        .copy(bowerPath + 'angular-ui-router/release/angular-ui-router.js',  bowerDestPath + 'vendor/angular-ui-router.js')
        .scripts(assets.js.controllers.files, assets.js.controllers.dest, assets.js.controllers.dir)
        .scripts(assets.js.services.files, assets.js.services.dest, assets.js.services.dir);
});
