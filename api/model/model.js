var db = require('../api/model/dbconnect.js');
var cors = require('cors');

var users = {
    signup: function (req,res) {
        res.setHeader('Access-Control-Allow-Origin', '*');
        db.query('INSERT INTO users SET username = ?, password = ?, first_name = ?, last_name = ?, promotion =  ?, mail = ?',
            [req.body.username, req.body.password, req.body.firstname, req.body.lastname, req.body.promo, req.body.mail], function (err) {
                if (err) {
                    throw err;
                }
            });
    }
}

module.exports = users;