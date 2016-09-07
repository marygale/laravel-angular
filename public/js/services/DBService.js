angular.module('DonServices')

        .factory('DB', function($q, DB_CONFIG){
            var self = this;
                self.db = null;

            self.init = function(){
                var runningOnDevice = document.location.protocol == 'file:';

                if(!runningOnDevice){
                    console.log('Connect database on the browser');
                    self.db = window.openDatabase(DB_CONFIG.name, '1.0', 'database', -1);
                }

                angular.forEach(DB_CONFIG.tables, function(table){
                   var columns = [];

                    angular.forEach(table.columns, function(column){
                        columns.push(column.name + ' ' + column.type);
                    });

                    var query = 'CREATE TABLE IF NOT EXISTS '+ table.name + ' (' + columns.join(',') + ')';
                    self.query(query);
                    console.log('Table '+ table.name + 'initialized');
                });
            };

            self.query = function(query, bindings){
                bindings = typeof bindings !== 'undefined' ? bindings : [];

            }
        })