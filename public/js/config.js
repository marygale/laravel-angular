angular
    .module('don.config', [])
    .constant('HOSTNAME', 'http://dev.gale.com/')
    .constant('DB_CONFIG', {
        name: 'DB',
        tables: [
            {
                name: 'UserSession',
                columns: [
                    {name: 'user', type: 'integer primary key'},
                    {name: 'username', type: 'text'},
                    {name: 'email', type: 'text'},
                    {name: 'authenticate', type: 'text'},
                    {name: 'token', type: 'text'},
                    {name: 'device', type: 'text'}
                ]
            }
        ]
    });
