
//Importar mmodulo http incluido en node
const http = require('http');
//definir puerto del servidor
const port = 3006;

//crear servidor
const server = http.createServer((req, res)=>{
    res.writeHead(200, {'Content-Type':'text/plain'});
    res.end('Soto Guerrero Jaasiel - 116004752')
    
});


server.listen(port, ()=>{
    console.log(`El servidor está en http://localhost:${port}`);
});
