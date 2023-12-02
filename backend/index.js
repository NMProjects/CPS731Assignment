const express = require("express");

const supa = require("./database.js");
const cors = require("cors");
const app = express();

app.use(express.json());
app.use(express.urlencoded({ extended: true }));
app.use(cors());
const port = 3000;

app.get("/", (req, res) => {
    res.send("Backend API is running 🎉");
});
app.listen(port, () => {
    console.log(`Example app listening at http://localhost:${port}`);
});
