const express = require('express');
const mysql   = require('mysql');

const app = express();

const connection = mysql.createConnection({
    //host : '172.17.0.2',
    host : 'mysql-container',
    user : 'root',
    password: '123',
    database : 'banco'
});

connection.connect();

app.get('/produtos', function(req, res){
    connection.query('Select p.cod_produto, p.nome_produto from produto p', function (error, results){
        if (error){
            throw error
        };

        res.send(results.map(item => ({cod_produto : item.cod_produto, nome_produto: item.nome_produto})));
    })
});

app.get('/', function(req, res){
    res.send('oi');
})


app.listen(9001, '0.0.0.0', function(){
    console.log('Ouvindo na 9001-');
});