const express = require('express');
const bodyParser = require('body-parser');
const path = require('path');
const api = require('./backend/routes/api');

const port = 3000;

const app = express();


app.use((req, res, next) => {
    res.setHeader('Access-Control-Allow-Origin', '*');
    res.setHeader('Access-Control-Allow-Headers',
        'Origin, X-Requested-With, X-HTTP-Method-Override, Content-Type, Accept');
    res.setHeader(
        'Access-Control-Allow-Methods',
        'GET, POST, PUT, PATCH, DELETE, OPTIONS');
  
    next();
  });


app.use(express.static(path.join(__dirname, 'dist/assignment1')));

app.use(bodyParser.urlencoded({extended:true}));
app.use(bodyParser.json());  

app.use("/api",api);

app.get('*', (req,res)=>{
    res.sendFile(path.join(__dirname, 'dist/assignment1/index.html'));
});

app.listen(port,function(){
    console.log("server running on local host " + port);

});