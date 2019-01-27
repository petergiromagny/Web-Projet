var express = require('express');
var bodyparser = require('body-parser');
var router = express.Router();
var app = express();
var mysql = require('mysql');

var routes = require('../api/routes/routes');

// use it before all route definitions

var hostname = 'localhost';
var port = 8080;

var connection = mysql.createConnection({
    host: 'localhost',
    user: 'root',
    password: '',
    database: 'projet_web'
});

connection.connect();


router.route('/users/inscription').post(function (req,res) {
    res.setHeader('Access-Control-Allow-Origin', '*');
    db.query('INSERT INTO users SET username = ?, password = ?, first_name = ?, last_name = ?, promotion =  ?, mail = ?',
        [req.body.username, req.body.password, req.body.firstname, req.body.lastname, req.body.promo, req.body.mail], function (err) {
            if (err) {
                throw err;
            }
        });
});

app.use(bodyparser.urlencoded({extended: false}));
app.use(bodyparser.json());
app.use(cors({origin: 'http://localhost:8080'}));
app.use(router);
app.listen(port, hostname, function () {
    console.log("Serveur -> http://" + hostname + ":" + port + "\n");
});

