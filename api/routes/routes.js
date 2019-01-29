'use strict';

module.exports = function (app) {
    var controller = require('/api/controller/controller.js');
    app.route('/users/inscription').post(controller.register);
}