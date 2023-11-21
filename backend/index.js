const sql = require('mssql')

// code for connecting to database
// need to choose which user for ID and Password values
// also run comman npm install mssql
async () => {
    try {
        // make sure that any items are correctly URL encoded in the connection string
        await sql.connect('Server=oracle.scs.ryerson.ca,1521;Database=database;User Id=username;Password=password;Encrypt=true')
        const result = await sql.query`select * from mytable where id = ${value}`
        console.dir(result)
    } catch (err) {
        // ... error checks
    }
}

const express = require("express");
const app = express();
const port = 3000;

app.get("/", (req, res) => {
    res.send("Hello World!");
});

app.listen(port, () => {
    console.log(`Example app listening at http://localhost:${port}`);
});
